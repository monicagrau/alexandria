<?php

define ('ALEXANDRIA_OTHER', 0);
define ('ALEXANDRIA_PDI_PDF', 1);
define ('ALEXANDRIA_SCORM', 2);
define ('ALEXANDRIA_COURSE_BACKUP', 3);
define ('ALEXANDRIA_PDI', 4);


// REPORT ABUSE FUNCTIONS

function alexandria_abuse_report_button($recordid) {
	global $CFG;
	$content = '<a href="'.$CFG->wwwroot.'/local/alexandria/data/report_abuse.php?recordid='.$recordid.'">'.
	get_string('reportabuse', 'local_alexandria').'</a>';
	return $content;
}

// DOWNLOAD FUNCTIONS
function alexandria_get_downloads($recordid, $fieldid = false) {
    global $CFG, $DB;
    if (!$fieldid) {
    	$dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
    	$fieldid = $DB->get_field('data_fields', 'id', array('name' => $CFG->data_filefieldid, 'dataid' => $dataid));
    }
    return (int)$DB->get_field('data_content', 'content4', array('recordid' => $recordid, 'fieldid' => $fieldid));
}

function alexandria_download_file($recordid, $fieldid) {
	global $CFG, $DB;
	require_once($CFG->libdir.'/filelib.php');

	$file = alexandria_get_file($recordid, $fieldid);
	if ($file) {
		alexandria_update_downloadings($recordid, $fieldid);
		send_stored_file($file, 0, 0, true);
		return;
	}
	send_file_not_found();
}

function alexandria_get_file($recordid, $fieldid) {
	global $CFG, $DB;
	require_once($CFG->libdir.'/filelib.php');

	$record = $DB->get_record('data_records', array('id' => $recordid));
	$field = $DB->get_record('data_fields', array('id' => $fieldid));
	if ($record && $field) {
		$dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
		$fs = get_file_storage();
		if ($field->param4 == ALEXANDRIA_COURSE_BACKUP) {
			// Course from automated backup area
			$coursefieldid = $DB->get_field('data_fields', 'id', array('name' => $CFG->data_coursefieldid, 'dataid' => $record->dataid));
			$courseid = $DB->get_field('data_content', 'content', array('fieldid' => $coursefieldid, 'recordid' => $recordid));
			return alexandria_get_course_file($courseid);
		} else {
			// Get other files
            if (!$content = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid' => $recordid))) {
                return null;
            }
            $cm = get_coursemodule_from_instance('data', $dataid);
            $context = context_module::instance($cm->id);
		    return $fs->get_file($context->id, 'mod_data', 'content', $content->id, '/', $content->content);
		}
	}
	return null;
}

function alexandria_get_course_file($courseid) {
	global $CFG;
	require_once($CFG->libdir.'/filelib.php');

	if (!$courseid) {
		return null;
	}

	$fs = get_file_storage();
	$context = context_course::instance($courseid, IGNORE_MISSING);
	if ($context) {
		// Course from automated backup area
		$files = $fs->get_area_files($context->id, 'backup', 'automated', false, 'timecreated DESC');
		foreach ($files as $file) {
			if (!$file->is_directory()) {
		        return $file;
			}
		}
	}
	return null;
}

function alexandria_update_downloadings($recordid, $fieldid) {
    global $CFG, $DB;
	$dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
    $record = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid' => $recordid));

    $value = $record->content4;
    if (empty($value)) {
    	$value = 1;
    } else {
	    $value++;
	}

    $record->content3 = time();
    $record->content4 = $value;
    $record->content1 = str_replace("'", "\'", $record->content1);
    $DB->update_record('data_content', $record);
    return $value;
}

function alexandria_get_download_info($recordid, $fieldid) {
	global $DB;
	$object = $DB->get_record('data_content', array('fieldid' => $fieldid, 'recordid' => $recordid));

	$values = array ();
	$values['total'] = empty($object->content4) ? 0 : $object->content4;
	$values['last'] = empty($object->content3) ? get_string('data_never', 'local_alexandria') : date("d/m/Y, G:i", (int)$object->content3);
	return $values;
}

function alexandria_get_replacement($value, $fieldname, $template, $record, $context) {
	global $CFG, $DB;

    switch($fieldname){
        case $CFG->data_filefieldid:
            if (!$value && $template == 'singletemplate') {
                return '<div>'.get_string('fileunavailable', 'local_alexandria').'</div>';
            }
            break;
        case $CFG->data_coursefieldid:
            if ($value && $DB->record_exists('course', array('id' => $value))) {
                return '<a href="'.$CFG->wwwroot.'/course/view.php?id='.$value.'">'.get_string('show_course', 'local_alexandria').'</a>';
            }
            // Es desaprova el curss perquè el curs no existeix i així ho pot revisar el revisor
            if ($record->timemodified < time() - 24 * 60 * 60 && !has_capability('mod/data:approve', $context)) {
                $record->approved = 0;
                $record->timemodified = time();
                $DB->update_record('data_records', $record);
            }
            return get_string('nocourse', 'local_alexandria');
            break;
    }
    if (!$value) {
        return '<div class="dataEmptyField"></div>';
    }
    return $value;
}


function alexandria_update_moodle_version($recordid, $version) {
	global $CFG, $DB;

	$oldversion = get_data_field_by_name($CFG->data_moodleversionfieldid, $recordid);
	if (empty($oldversion)) {
		$dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
		$field = $DB->get_record('data_fields', array('dataid' => $dataid, 'name' => $CFG->data_moodleversionfieldid));
		$versionfield = data_get_field($field, $dataid);
		$versionfield->update_content($recordid, $version);
	}
}

function alexandria_get_admin() {
	global $DB;
	$admin = $DB->get_record('user', array('username' => 'xtecadmin'));
	if (!$admin) {
		$admin = $DB->get_record('user', array('username' => 'admin'));
	}
	if (!$admin) {
		$admin = $DB->get_record('user', array('id' => 2));
	}
	if ($admin && is_siteadmin($admin)) {
			return $admin;
	}
	return false;
}

// RESTORE FUNCTIONS
function alexandria_restore_course($file, $recordid) {
	global $DB, $CFG, $USER;

	require_once($CFG->dirroot . '/backup/util/includes/restore_includes.php');

	if (!$file) {
		throw new moodle_exception('filenotfound');
	}

	$useradmin = alexandria_get_admin();
	if ($useradmin) {
		$userid = $useradmin->id;
	} else if (isset($USER->id) && $USER->id != 0) {
		$userid = $USER->id;
	} else {
		print_error('user_not_found');
	}

	$category = alexandria_get_course_category($recordid);
	$fullname = get_data_field_by_name($CFG->data_fullnamefieldid, $recordid);
	$shortname = alexandria_get_course_shortname($category, $recordid);
	$courseid = restore_dbops::create_new_course($fullname, $shortname, $category->id);

	$fs = get_file_storage();
	if (get_class($file) != 'stored_file') {
		$file = $fs->get_file_instance($file);
	}

	$backupid = restore_controller::get_tempdir_name($courseid, $userid);
	$basepath = alexandria_get_basepath($backupid);

	if (!check_dir_exists($basepath, true, true)) {
		throw new moodle_exception('tempnotfound', 'moodle', $basepath);
	}
	if (!$file->extract_to_pathname(get_file_packer(), $basepath)) {
		throw new moodle_exception('errorunzip');
	}

	$rc = new restore_controller($backupid, $courseid,
		backup::INTERACTIVE_NO, backup::MODE_GENERAL, $userid, backup::TARGET_NEW_COURSE);

	// Save the moodle version of the backup
	alexandria_update_moodle_version($recordid, $CFG->backup_release);

	alexandria_get_restoresettings($rc);

	// Restore backup into course
	if ($rc->get_status() == backup::STATUS_REQUIRE_CONV) {
		$rc->convert();
	}

	if (!$rc->execute_precheck()) {
		$precheckresults = $rc->get_precheck_results();
		if (is_array($precheckresults) && !empty($precheckresults['errors'])) {
			if (empty($CFG->keeptempdirectoriesonbackup)) {
				fulldelete($basepath);
			}

			$errorinfo = '';

			foreach ($precheckresults['errors'] as $error) {
				$errorinfo .= $error;
			}

			if (array_key_exists('warnings', $precheckresults)) {
				foreach ($precheckresults['warnings'] as $warning) {
					$errorinfo .= $warning;
				}
			}
			throw new moodle_exception('backupprecheckerrors', 'webservice', '', $errorinfo);
		}
	}
	$rc->execute_plan();
	$rc->destroy();

	if (empty($CFG->keeptempdirectoriesonbackup)) {
		fulldelete($basepath);
	}

	return $courseid;
}

function alexandria_get_restoresettings(&$rc, $settings_override = false) {
	$settings = array(
			'activities' => 1,
			'blocks' => 0,
			'filters' => 0,
			'role_assignments' => 0,
			'comments' => 0,
			'logs' => 0,
            'calendarevents' => 0,
            'users' => 0,
            'userscompletion' => 0
	);

	if ($settings_override) {
		foreach ($settings_override as $name => $value) {
			$settings[$name] = $value;
		}
	}

	foreach ($settings as $name => $value) {
		try {
			$setting = $rc->get_plan()->get_setting($name);
			if ($setting->get_status() == backup_setting::NOT_LOCKED) {
				$setting->set_value($value);
			}
		} catch (Exception $e) {
			continue;
		}
	}
}

function alexandria_get_basepath($backupid = false) {
	global $CFG;
	$basepath = $CFG->tempdir . '/backup';

	if ($backupid) {
		$basepath .= '/'.$backupid;
	}
	return $basepath;
}

function alexandria_get_course_category ($recordid) {
	global $CFG, $DB;

	$cat = explode('-', get_data_field_by_name($CFG->data_categoryfieldid, $recordid));
	$category = $DB->get_record('course_categories', array('name' => $cat[1]));
	if (!$category) {
		$category = new stdClass();
		$category->name = $cat[1];
		$category->idnumber = $cat[0];
		$category->visible = 1;
		$category->parent = 0;
		$category->depth = 1;
		$category = coursecat::create($category);
	}
	return $category;
}

function alexandria_get_course_shortname($category, $recordid) {
	global $CFG, $DB;

	// Find new ccid. Shortnames will have this layout: CC_MMYY_CID_V.S
	// We need to have the greater CID and add one.
	$courseshortnames = $DB->get_records('course', array('category' => $category->id), 'shortname');
	$ccid = 0;
	foreach ($courseshortnames as $courseshortname) {
		$parts = explode('_', $courseshortname->shortname);
		if (isset($parts[2])) {
			$newccid = (int) $parts[2];
			if ($newccid > $ccid) {
				$ccid = $newccid;
			}
		}
	}
	$ccid++;

	return $category->idnumber
		.'_'.date('my', get_data_field_by_name($CFG->data_creationdatefieldid, $recordid))
		.'_'.str_pad($ccid, 3, '0', STR_PAD_LEFT)
		.'_1.0';
}

function override_course_values($courseid, $recordid, $updateshortname = true) {
	global $DB, $CFG;
	$category = alexandria_get_course_category($recordid);
	$course = $DB->get_record('course', array('id' => $courseid));
    $course->fullname = get_data_field_by_name($CFG->data_fullnamefieldid, $recordid);
	if ($updateshortname) {
		$course->shortname = alexandria_get_course_shortname($category, $recordid);
	}
	$dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
	$field = $DB->get_record('data_fields', array('dataid' => $dataid, 'name' => $CFG->data_shortnamefieldid));
	$shortname = data_get_field($field, $dataid);
	$shortname->update_content($recordid, $course->shortname);
	$course->summary = get_data_field_by_name($CFG->data_summaryfieldid, $recordid).'<br/>';
	if ($creator = get_data_field_by_name($CFG->data_creatorfieldid, $recordid)) {
		$course->summary .= '<br/><strong>'.get_string('creatorfield', 'local_alexandria').': </strong>'.$creator;
	}
	if ($license = get_data_field_by_name($CFG->data_licensefieldid, $recordid)) {
        $course->summary .= '<br/><strong>'.get_string('licensefield', 'local_alexandria').': </strong>'.$license;
	}

	$course->category = $category->id;
	$course->coursedisplay = 0;
	$course->legacyfiles = 1;
	update_course($course);
}

function get_data_field_by_name($name, $recordid) {
	global $DB;
	$dataid = $DB->get_field('data_records', 'dataid', array('id' => $recordid));
	$fieldid = $DB->get_field('data_fields', 'id', array('dataid' => $dataid, 'name' => $name));
	return $DB->get_field('data_content', 'content', array('fieldid' => $fieldid, 'recordid' => $recordid));
}

function sort_datarecord_files_last($a, $b) {
	$a = explode('_', $a->name);
	$a = end($a);

	$b = explode('_', $b->name);
	$b = end($b);

	if ($a == 'file' && $b == 'file') return 0;
	if ($a == 'file') return 1;
	if ($b == 'file') return -1;
	return 0;
}


function alexandria_create_scorm_object($filename, $summary, $maxfilesize){
	global $CFG, $DB;

	require_once($CFG->dirroot.'/mod/scorm/lib.php');
    require_once($CFG->dirroot.'/course/lib.php');

    $module_scorm_id = $DB->get_field('modules', 'id', array('name' => 'scorm'));
    $courseid = $DB->get_field('course', 'id', array('idnumber'=>'scorm'));
    if(!$courseid) {
    	$courseid = SITEID;
    }

    $scorm_object = new stdClass();
    $scorm_object->MAX_FILE_SIZE = $maxfilesize;
    $scorm_object->name = $filename;
    $scorm_object->summary = $summary;
    $scorm_object->grademethod = 1;
    $scorm_object->maxgrade = 100;
    $scorm_object->maxattempt = 0;
    $scorm_object->whatgrade = 0;
    $scorm_object->mform_showadvanced_last = 0;
    $scorm_object->width = 100;
    $scorm_object->height = 500;
    $scorm_object->popup = 0;
    $scorm_object->skipview = 0;
    $scorm_object->hidebrowse = 0;
    $scorm_object->hidetoc = 0;
    $scorm_object->hidenav = 0;
    $scorm_object->auto = 0;
    $scorm_object->updatefreq = 0;
    $scorm_object->datadir = '';
    $scorm_object->pkgtype = '';
    $scorm_object->launch = '';
    $scorm_object->redirect = 'no';
    $scorm_object->redirecturl = '../mod/scorm/view.php?id=';
    $scorm_object->visible = 0;
    $scorm_object->cmidnumber = '';
    $scorm_object->gradecat = 1;
    $scorm_object->course = $courseid;
    $scorm_object->section = 1;
    $scorm_object->module = $module_scorm_id;
    $scorm_object->modulename = 'scorm';
    $scorm_object->instance = '';
    $scorm_object->add = 'scorm';
    $scorm_object->update = 0;
    $scorm_object->return = 0;
    $scorm_object->submitbutton = '';
    $scorm_object->groupingid = 0;
    $scorm_object->groupmembersonly = 0;
    $scorm_object->groupmode = 0;
    $scorm_object->intro = $scorm_object->summary;

    return $scorm_object;
}