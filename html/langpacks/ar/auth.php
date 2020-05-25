<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth', language 'ar', branch 'MOODLE_36_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'إضافات الصلاحيات المتاحة';
$string['allowaccountssameemail'] = 'السماح لعدة حسابات أن تستخدم نفس البريد الإلكتروني';
$string['allowaccountssameemail_desc'] = 'في حالة التمكين، يمكن لأكثر من حساب مستخدم أن يستخدموا عنوان البريد الإلكتروني نفسه. قد يسبب ذلك مشكلات متعلقة بالأمان أو الخصوصية، على سبيل المثال: البريد الإلكتروني الذي يرسل لتأكيد تغيير كلمة المرور.';
$string['alternatelogin'] = 'لو قمت بداخل عنوان هنا، سيستخدم كصفحة دخول إلى الموقع، يجب أن تحتوي الصفحة على نموذج يتضمن الأمر <strong>\'{$a}\'</strong> والحقول <strong>username</strong> و <strong>password</strong>.<br /> كن حذر في أدخال عنوان صحيح في حالة أدخالك عنوان خاطئ سيتم حجبك عن الموقع. <br /> أترك هذا الإعداد فارغاً ليتم استخدم صفحة الدخول الأفتراضية.';
$string['alternateloginurl'] = 'استبدل عنوان الدخول';
$string['auth_changepasswordhelp'] = 'مساعدة تغير كلمة المرور';
$string['auth_changepasswordhelp_expl'] = 'أعرض مساعدة كلمة المررور المفقودة للمستخدمين الذين فقدوا {$a} كلمات مرورهم. هذا سيتم عرضة أمّا بالإضافة إلى أَو بدلاً مِنْ <strong>عنوان تغيير كلمة المرور </strong> أو تغير كلمة مرور مودل داخليا';
$string['auth_changepasswordurl'] = 'عنوان تغير كلمة المرور';
$string['auth_changepasswordurl_expl'] = 'حدّدْ عنوان لإرْسال المستخدمين الذين فَقدَوا {$a} كلمة المرورهم. أعد <strong>استخدم صفحة قياسية لتغير كلمة المرور </strong> إلي <strong>لا';
$string['auth_changingemailaddress'] = 'لقد طلبت تغيير بريدك الإلكتروني من {$a->oldemail} إلى {$a->newemail}. سنرسل لك رسالة إلى بريدك الإلكتروني الجديد لأسباب أمنية للتأكد من أنه ملكك. سيتم تحديث بريدك الإلكتروني حالما تفتح الرابط الذي ستجده لك في تلك الرسالة.';
$string['auth_common_settings'] = 'الأعدادات العامه';
$string['auth_data_mapping'] = 'تخطيط البيانات';
$string['authenticationoptions'] = 'خيارات التوثيق';
$string['auth_fieldlock'] = 'أغلق القيمة';
$string['auth_fieldlock_expl'] = 'قيمة قفلِ: </b> إذا مُكَّنِ، سَيَمْنعُ المستخدمي ومدراء مودل مِنْ تَحرير الحقلِ مباشرة. إستعملْ هذا الخيارِ إذا أنت تحتفظ بهذه البياناتِ في نظامِ تحقق خارجي. </p>';
$string['auth_fieldlockfield'] = 'أقفل القيمة({$a})';
$string['auth_fieldlocks'] = 'اغلق حقول المستخدم';
$string['auth_fieldlocks_help'] = '<p> تستطيع غلق حقول بيانات المستخدم. هذا مفيد للمواقعِ التي يقوم المدرائها بتحرير سجلات المستخدمين يدوياً أو بإستخدام خدمة رفع ملف بيانات المستخدم. لو قمت بقفل حقول مطلوبة من مودل، تأكد من تزويدك لتلك البيانات عندما تنشئ حسابات المستخدمين؛ وإلا ستكون الحسابات غير صالحة للإستعمال. </p> <p>خذ في اعتبارك وضع إعداد حالة الإغلاق في \'عدم الإغلاق إذا كان الحقل فارغا\' لتفادي هذه المشكلة.</p>';
$string['auth_fieldmapping'] = 'تعيين البيانات ({$a})';
$string['authinstructions'] = 'هنا يمكنك إعطاء تعليمات للمستخدمين لديك حتى يعرفوا أسماء المستخدمين وكلمات المرور التي يتعين عليهم استخدامها. سيظهر النص الذي تقوم بإدخاله هنا على صفحة الدخول. إذا تركت هذا المكان فارغا فلن يتم طباعة أية تعليمات.';
$string['auth_invalidnewemailkey'] = 'خطأ: إذا كنت تحاول تأكيد تغيير بريدك الإلكتروني، فلربما أخطأت في نسخ الرابط المرسل لك إلى البريد الإلكتروني. رجاءً انسخه مرة وحاول مجدداً.';
$string['authloginviaemail'] = 'السماح بتسجيل الدخول عبر البريد الإلكتروني';
$string['authloginviaemail_desc'] = 'السماح للمستخدمين باستخدام كل من اسم المستخدم وعنوان البريد الإلكتروني (إذا كان فريدًا) لتسجيل الدخول إلى الموقع.';
$string['auth_multiplehosts'] = 'يمكن تحديد اكثر من مستضيف مواقع (host1.com, host2.net, host3.org)';
$string['auth_notconfigured'] = 'طريقة التوثيق {$a} لم يتم ضبطها.';
$string['auth_outofnewemailupdateattempts'] = 'لقد وصلت للحد الأقصى المسموح لمحاولات تغيير بريدك الإلكتروني. لقد تم إلغاء طلبك.';
$string['auth_passwordisexpired'] = 'انتهت صلاحية كلمة مرورك. هل ترغب في تغيرها الآن؟';
$string['auth_passwordwillexpire'] = 'ستنتهي صلاحية كلمة مرورك خلال {$a} أيام. هل ترغب في تغيرها الآن؟';
$string['auth_remove_delete'] = 'حذف كامل للداخلي';
$string['auth_remove_keep'] = 'إبقاء الداخلي';
$string['auth_remove_suspend'] = 'تعليق الداخلي';
$string['auth_remove_user'] = 'حدد ماذا سيفعل بحسابات المستخدمين الداخلية أثناء المزامنة الشاملة عندما يكون المستخدم قد حذف من المصدر الخارجي.
فقط المستخدمين المعلقين يتم إعادتهم بشكل تلقائي إذا ظهروا مرة ثانية في المصدر الخارجي.';
$string['auth_remove_user_key'] = 'المستخدم الخارجي المحذوف';
$string['auth_sync_script'] = 'سكريبت مزامنة كرون';
$string['auth_sync_suspended'] = 'عند التمكين، سيتم استخدام السمة المعلّقة لتحديث حالة تعليق حساب المستخدم المحلي.';
$string['auth_sync_suspended_key'] = 'مزامنة حالة تعليق المستخدم المحلي';
$string['auth_updatelocal'] = 'حذث المعلومات المحلية';
$string['auth_updatelocal_expl'] = '<p><b>تحديث محلي:</b> عند تفعيله، سيتم تحديث الحقل (عبر مصادقة خارجية) كلما سجل المستخدم دخوله أو عند إجراء مزامنة للمستخدم. يجب قفل الحقول المعدّة للتحديث المحلّي.</p>';
$string['auth_updatelocalfield'] = 'حدِّث المحلي ({$a})';
$string['auth_updateremote'] = 'حدث المعلمومات الخارجية';
$string['auth_updateremote_expl'] = '<p><b>تحديث خارجي:</b> عند التفعيل، سيتم تحديث المصادقة الخارجية عند تحديث سجل المستخدم. يجب إلغاء قفل الحقول للسماح بتحريرها.</p>';
$string['auth_updateremotefield'] = 'حدِّث الخارجي ({$a})';
$string['auth_updateremote_ldap'] = '<p> <b> مُلاحظة: </b> تحديث بياناتَ إل دي أي بي (LDAP) الخارجية تَتطلّبُ منك وَضعتَ (binddn)  و(bindpw) لربط مستخدم بصلاحيات تَحرير لكلّ سجلات المستخدم. هو حالياً لا تحتفظ بخواصَ متعددةَ القيم، وسَتُزيلُ قِيَمَ إضافيةَ عند التحديث. </p>';
$string['auth_user_create'] = 'تمكين إنشاء مستخدم';
$string['auth_user_creation'] = 'يستطيع المستخدمون الجدد أو (المجهولون) انشاء حسابات على مصدر التوثيق الخارجيّ و تأكيّد التسجيل عبر بريد إلكترونيّ . إذا أنت مكنت هذه الخاصيه, أذن تذكّر أن توفّق بين الخيارات ذات المركبة المحدّدة لإنشاء المستخدم أيضًا';
$string['auth_usernameexists'] = 'الاسم المختار موجود، الرجاء اختيار اسم اخر';
$string['auth_usernotexist'] = 'لا يمكن تحديث المستخدم الغير موجود: {$ a}';
$string['auto_add_remote_users'] = 'إضافة تلقائية للمستخدمين البعيدين';
$string['cannotmapfield'] = 'لا يمكن تعيين الحقل "{$a->fieldname}" نظرًا لأن اسمه المختصر "{$a->shortname}" طويل جدًا. للسماح بتعيينه، يلزمك اختصار الاسم المختصر إلى {$a->charlimit}. <a href="{$a->link}">Edit user profile fields</a>';
$string['changepassword'] = 'تغيير عنوان كلمة المرور';
$string['changepasswordhelp'] = 'هنا تستطيع تعيين الموضع الذي يمكن للمستخدمين من خلاله استرداد أو تغيير أسماء المستخدمين أو كلمات المرور الخاصة بهم في حالة نسيانها. وسوف يكون ذلك متاحا للمستخدمين من خلال زر في صفحة الدخول وصفحة المستخدم الخاصة بهم. أما إذا تركت هذا المكان خاليا، فلن يتم طباعة الزر.';
$string['chooseauthmethod'] = 'اختر أسلوبا للتوثيق:';
$string['chooseauthmethod_help'] = 'هذا الإعداد يحدد طريقة المصادقة المستخدمة عند تسجيل دخول المستخدمين. يجب اختيار إضافات المصادقة المفعّلة فقط، وإلا فلن يتمكن المستخدم من تسجيل الدخول. لمنع المستخدم من تسجيل الدخول، اختر "منع تسجيل الدخول".';
$string['createpassword'] = 'أصدر كلمة المرور وأعلِّم المستخدم.';
$string['createpasswordifneeded'] = 'أنشئ كلمة مرور أذا كنت تحتاج';
$string['emailchangecancel'] = 'إلغاء تغيير البريد';
$string['emailchangepending'] = 'التغيير معلق. افتح الرابط الذي تم إرساله لك على {$a->preference_newemail}.';
$string['emailnowexists'] = 'البريد الإلكتروني الذي تريد تخصيصه في حسابك تم تخصيصه من قبل شخص آخر. لذا تم إلغاء طلبك لتغيير البريد، يمكنك المحاولة مرة أخرى مع بريد آخر.';
$string['emailupdate'] = 'تحديث البريد الإلكتروني';
$string['emailupdatemessage'] = 'عزيزي {$a->fullname}،

لقد طلبت تغيير البريد الإلكتروني لحسابك في {$a->site}. الرجاء افتح الرابط التالي لتأكيد هذا التغيير.

{$a->url}';
$string['emailupdatesuccess'] = 'تم تغيير البريد الإلكتروني للمستخدم <em>{$a->fullname}</em> بنجاح إلى <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'تأكيد تحديث البريد الإلكتروني في {$a->site}';
$string['enterthenumbersyouhear'] = 'أدخل الأرقام التي تسمعها';
$string['enterthewordsabove'] = 'أدخل الكلمات أعلاه';
$string['errormaxconsecutiveidentchars'] = 'يجب ألا تحوي كلمة السر على أكثر من {$a} أحرف متتالية ومتماثلة.';
$string['errorminpassworddigits'] = 'يجب أن تكون كلمات السر مكونة من {$a} رقم على الأقل.';
$string['errorminpasswordlength'] = 'يجب أن تكون كلمة السر بطول {$a} أحرف على الأقل.';
$string['errorminpasswordlower'] = 'يجب أن تحوي كلمة السر على {$a} حرف صغير على الأقل.';
$string['errorminpasswordnonalphanum'] = 'يجب أن تحوي كلمة السر على {$a} حرف على الأقل غير الأبجدية والأرقام.';
$string['errorminpasswordupper'] = 'يجب أن تحوي كلمة السر على {$a} حرف كبير على الأقل.';
$string['errorpasswordreused'] = 'تم استخدام كلمة المرور هذه من قبل ، ولا يُسمح بإعادة استخدامها';
$string['errorpasswordupdate'] = 'خطأ في تحديث كلمة السر، لم يتم تغيير كلمة السر.';
$string['eventuserloggedin'] = 'قام المستخدم بتسجيل الدخول';
$string['eventuserloggedinas'] = 'المستخدم بتسجيل الدخول كمستخدم آخر';
$string['eventuserloginfailed'] = 'فشل تسجيل دخول المستخدم';
$string['forcechangepassword'] = 'أجبر تغير كلمة المرور';
$string['forcechangepasswordfirst_help'] = 'أجبر المستخدمين على تغير كلمة المرور عندما يقوموا بالدخول إلى مودل أول مرة.';
$string['forcechangepassword_help'] = 'أجبر المستخدمين على تغير كلمة المرور عندما يقوموا بالدخول إلى مودل أول مرة.';
$string['forgottenpassword'] = 'العنوان الذي ستدخله هنا، سيستخدم كصفحة استعادة كلمات المرور الضائعة لهذا الموقع.
هذا موجه للمواقع التي تتعامل مع كلمات المرور خارج مودل بالكامل. اتركه فارغاً لاستخدام صفحة استعادة كلمة المرور الافتراضية.';
$string['forgottenpasswordurl'] = 'عنوان رابط كلمة المرور المنسية';
$string['getanaudiocaptcha'] = 'الحصول على كاباتشا صوتية';
$string['getanimagecaptcha'] = 'احصل على كاباتشا صورية';
$string['getanothercaptcha'] = 'احصل على كاباتشا أخرى';
$string['getrecaptchaapi'] = 'لاستخدام reCAPTCHA يجب الحصول على مفتاح واجهة برمجة التطبيقات من: <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'زر دخول الضيف';
$string['incorrectpleasetryagain'] = 'غير صحيح، حاول مرة أخرى.';
$string['infilefield'] = 'الحقول المطلوبة في الملف';
$string['informminpassworddigits'] = 'على الأقل {$a} رقم';
$string['informminpasswordlength'] = 'على الأقل {$a} حرف';
$string['informminpasswordlower'] = 'على الأقل {$a} حرف صغير';
$string['informminpasswordnonalphanum'] = 'على الأقل {$a} رمز (رموز) غير أبجدية أو رقمية مثل * أو - أو #';
$string['informminpasswordreuselimit'] = 'يمكن إعادة استخدام كلمة السر بعد {$a} تغييرات';
$string['informminpasswordupper'] = 'على الأقل {$a} حرف كبير';
$string['informpasswordpolicy'] = 'يجب أن تحوي كلمة السر {$a}';
$string['instructions'] = 'تعليمات';
$string['internal'] = 'داخلي';
$string['limitconcurrentlogins'] = 'الحد من عمليات تسجيل الدخول المتزامنة';
$string['limitconcurrentlogins_desc'] = 'إذا تم تفعيله، فسيتم الحد من عدد عمليات تسجيل الدخول المتزامنة لكل مستخدم. سيتم إنهاء الجلسة الأقدم عند الوصول إلى الحد الأقصى. يُرجى ملاحظة أن المستخدمين قد يفقدون جميع الأعمال التي لم يتم حفظها. هذا الإعداد غير متوافق مع تسجيل الدخول الأحادي (SSO) Single Sign-on (SSO).';
$string['locked'] = 'مغلق';
$string['md5'] = 'تشفير MD5';
$string['nopasswordchange'] = 'لا يمكن تغير كلمة المرور';
$string['nopasswordchangeforced'] = 'لا يمكنك الاستمرار دون تغيير كلمة مرورك، لكن يبدو أنه لا يوجد صفحة متوفرة لتغييرها. رجاءً قم بالاتصال بمدير مودل.';
$string['noprofileedit'] = 'لا يمكن تحرير معلومات الحساب';
$string['ntlmsso_attempting'] = 'محاولة تسجيل الدخول الواحد (SSO) عبر NTLM...';
$string['ntlmsso_failed'] = 'فشل تسجيل الدخول التلقائي، حاول من صفحة تسجيل الدخول العادية...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO غير مفعّل.';
$string['passwordhandling'] = 'حقل التعامل مع كلمة المرور';
$string['plaintext'] = 'نص عادي';
$string['pluginnotenabled'] = 'إضافة المصادقة \'{$a}\' غير مفعّلة.';
$string['pluginnotinstalled'] = 'إضافة المصادقة \'{$a}\' غير مثبتة.';
$string['potentialidps'] = 'قم بتسجيل الدخول باستخدام حسابك على:';
$string['privacy:metadata:userpref:createpassword'] = 'يشير إلى أنه يجب إنشاء كلمة مرور للمستخدم';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'يشير إلى ما إذا كان يجب على المستخدم تغيير كلمة المرور الخاصة به عند تسجيل الدخول';
$string['privacy:metadata:userpref:loginfailedcount'] = 'عدد المرات التي فشل فيها المستخدم في تسجيل الدخول';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'عدد المرات التي فشل فيها المستخدم في تسجيل الدخول منذ آخر تسجيل دخول ناجح';
$string['privacy:metadata:userpref:loginfailedlast'] = 'التاريخ الذي تم فيه تسجيل آخر محاولة تسجيل دخول فاشلة';
$string['privacy:metadata:userpref:loginlockout'] = 'ما إذا كان حساب المستخدم مقفلاً بسبب محاولات تسجيل الدخول الفاشلة، وتاريخ قفل الحساب';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'يشير إلى أن حساب المستخدم يجب ألا يخضع أبدًا للإغلاق';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'عند الإغلاق ، السر الذي يجب على المستخدم استخدامه لفتح حسابه';
$string['recaptcha'] = 'ريكاباتشا';
$string['recaptcha_help'] = 'يستخدم اختبار CAPTCHA لمنع إساءة الاستخدام من البرامج التلقائية. اتبع التعليمات للتحقق من أنك شخص. قد يكون هذا مربعًا للتحقق، أو الأحرف المعروضة في صورة يجب إدخالها أو مجموعة من الصور للاختيار من بينها.

إذا لم تكن متأكدًا من طبيعة الصور، فيمكنك تجربة اختبار CAPTCHA آخر أو اختبار CAPTCHA صوتي.';
$string['security_question'] = 'سؤال حماية';
$string['selfregistration'] = 'التسجيل الذاتي';
$string['selfregistration_help'] = 'إذا تم تحديد إضافة مصادقة، كالتسجيل الذاتي عبر البريد الإلكتروني، فهذا يسمح للمستخدمين أن يسجلوا أنفسهم وينشؤون حساباتهم. وهذا قد يمكن أشخاص مزعجين من إنشاء حسابات واستخدام مشاركات المنتديات، والتدوينات وغيرها لنشر إزعاجاتهم. لتجنّب هذا الخطر، يجب إلغاء تفعيل التسجيل التلقائي أو الحد منه عبر إعداد <em>مجالات البريد المسموح بها</em>';
$string['settingmigrationmismatch'] = 'تم اكتشاف عدم تطابق القيم أثناء تصحيح أسماء إعداد المكوِّن الإضافي! يحتوي المكوّن الإضافي للمصادقة \'{$a->plugin}\' على الإعداد \'{$a->setting}\' الذي تمت تهيئته على \'{$a->legacy}\' تحت الاسم القديم و \'{$a->current}\' تحت الاسم الحالي. تم تعيين القيمة الأخيرة على أنها القيمة الصالحة ولكن يجب عليك التحقق وتأكيد  أنها هي المتوقعة.';
$string['sha1'] = 'تشفير SHA-1';
$string['showguestlogin'] = 'يمكنك إظهار أو إخفاء زر دخول الضيف في صفحة الدخول.';
$string['stdchangepassword'] = 'استخدم صفحة تغير كلمة المرور القياسية';
$string['stdchangepassword_expl'] = 'لو يسمح نظام التوثيق الخارجي بتغير كلمة المرور من خلال مودل، إذن حول هذا الإعداد إلى (نعم). هذا الإعداد سيتخطى مسار تغير كلمة المرور.';
$string['stdchangepassword_explldap'] = 'ملاحظة: ينصح استخدام LDAP عبر قناة SSL مشفرة (ldaps://) إن كان مخدم LDAP بعيداً.';
$string['suspended'] = 'حساب معلّق';
$string['suspended_help'] = 'لا يمكن لحسابات المستخدمين الموقوفة تسجيل الدخول أو استخدام خدمات الويب ، ويتم تجاهل أي رسائل صادرة.';
$string['testsettings'] = 'أختبر الإعدادات';
$string['testsettingsheading'] = 'اختبار إعدادات المصادقة - {$a}';
$string['unlocked'] = 'فتح';
$string['unlockedifempty'] = 'عدم الإغلاق إذا كان الحقل فارغا';
$string['update_never'] = 'ابداً';
$string['update_oncreate'] = 'يتم أنشائه';
$string['update_onlogin'] = 'أثناء كل دخول';
$string['update_onupdate'] = 'أثناء التحديث';
$string['user_activatenotsupportusertype'] = 'المصادقة: ldap user_activate() لا يدعم نوع المستخدم المحدد: {$a}';
$string['user_disablenotsupportusertype'] = 'المصادقة: ldap user_disable() لا يدعم نوع المستخدم المحدد (حتى الآن...)';
$string['username'] = 'اسم المستخدم';
$string['username_help'] = 'يرجى العلم بأن بعض المكونات الإضافية للمصادقة لن تسمح لك بتغيير اسم المستخدم.';
