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
 * Strings for component 'block', language 'ar', branch 'MOODLE_38_STABLE'
 *
 * @package   block
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'أنقله الى منطقة الإرساء';
$string['anypagematchingtheabove'] = 'أي صفحة متطابقة مع الصفحة العليا';
$string['appearsinsubcontexts'] = 'يظهر في المتحويات الفرعية';
$string['assignrolesinblock'] = 'تعيين الأدوار في كتلة {$a}';
$string['blocksdrawertoggle'] = 'إخفاء/إظهار دُرج الكتل';
$string['blocksettings'] = 'إعدادات الكتلة';
$string['bracketfirst'] = '{$a} أولاً';
$string['bracketlast'] = '{$a} آخراً';
$string['configureblock'] = 'تهيئة كتلة {$a}';
$string['contexts'] = 'سياقات الصفحة';
$string['contexts_help'] = 'السياقات هي صفحات من نوع أكثر تحديداً حيث يمكن عرض هذه الكتلة ضمن موقعها الأصلي. سيكون لديك عدة خيارات هنا اعتماداً على موقع الكتلة الأصلي وموقعك الحالي. كمثال على ذلك، يمكنك تقييد ظهور الكتلة ليقتصر على المنتدى فقط في المساق عبر إضافة الكتلة للمساق (مما يسمح لها بالظهور في كل الصفحات الفرعية)، ثم الذهاب إلى المنتدى وتحرر إعدادات الكتلة مرة أخرى لتقييد عرضها مع صفحات المنتدى.';
$string['createdat'] = 'الموضع الأصلي للكتلة';
$string['createdat_help'] = 'الموقع الأساسي الذي تم إنشاء الكتل فيه . إعدادات الكتل قد يجعلها تظهر في أماكن أخرى (سياقات) داخل الموقع الأساسي .
كمثال كتلة أنشئت في صفحة المقرر يمكن عرضها في الأنشطة داخل ذلك المقرر .
الكتلة المنشأة في الصفحة الأولى يمكن عرضها في كل الموقع';
$string['defaultregion'] = 'منظقة افتراضية';
$string['defaultregion_help'] = 'المظاهر قد تعرّف اسما واحدا أو من مناطق الكتل حيث تظهر الكتل . هذه الإعدادات تحدد أي من هذه الكتل تريدها أن تظهر بشكل افتراضي . النطاق يمكن تجاوزه في صفحات محددة إذا لزم الأمر  ..';
$string['defaultweight'] = 'وزن فتراضي';
$string['defaultweight_help'] = 'تسْمحُ لك القيمةِ الأفتراضي إخْتياَر المكان الذي تُريدُ الكتلةَ أَنْ تَظْهرَ فيه ضمن المنطقةِ المُختَاَرةِ، أمّا في الأعلى أَو الأسفل. مع العلم أنه سيتم حساب الموقعَ النهائيَ للكتلة مع باقي الكُتَل في تلك المنطقةِ (على سبيل المثال، فقط كتلة واحدة يُمْكِنُ أَنْ تَكُونَ في الأعلى). يُمْكِنُ أَنْ تُتجاوزَ هذه القيمةِ على الصفحاتِ المعيّنةِ إذا كان هذا مطلوبا.';
$string['deleteblock'] = 'إحذف كتلة {$a}';
$string['deleteblockcheck'] = 'هل انت متأكد من رغبتك في حذف الكتلة المسماة {$a}؟';
$string['deleteblockwarning'] = 'أنت على وشك حذف كتلة تظهر في مكان آخر.

موقع الكتلة الأصلي: {$ a-> location}
تعرض على الصفحات من النوع: {$ a-> pagetype}

هل أنت متأكد أنك تريد المتابعة؟';
$string['deletecheck'] = 'أتريد حذف كتلة {$a}؟';
$string['dockblock'] = 'تصغير الصندوق';
$string['hideblock'] = 'إخفاء كتلة {$a}';
$string['hidedockpanel'] = 'اخفاء صندوق التصغير';
$string['hidepanel'] = 'اخفاء اللوحة';
$string['moveblock'] = 'نقل كتلة {$a}';
$string['moveblockafter'] = 'أنقل الكتلة إلى ما بعد كتلة {$a}';
$string['moveblockbefore'] = 'أنقل الكتلة إلى ما قبل كتلة {$a}';
$string['moveblockinregion'] = 'أنقل الكتلة إلى منطقة {$a}';
$string['movingthisblockcancel'] = 'حرك هذه الكتلة ({$a})';
$string['myblocks'] = 'كتلي';
$string['onthispage'] = 'على هذه الصفحة';
$string['pagetypes'] = 'أنواع الصفحات';
$string['pagetypewarning'] = 'إنّ نوعَ الصفحةِ المحدّدِ سابقاً لَمْ يَعُدْ قابل للإختيار. رجاءً إخترْ نوعَ الصفحةِ الأكثر ملائمة من القائمة التالية';
$string['privacy:metadata:userpref:dockedinstance'] = 'يسجل متى ما قام المستخدم بإرساء كتلة';
$string['privacy:metadata:userpref:hiddenblock'] = 'يسجل متى ما قام المستخدم بِطَي أو إخفاء كتلة';
$string['privacy:request:blockisdocked'] = 'يشير إلى ما إذا كان قد تم إرساء الكتلة';
$string['privacy:request:blockishidden'] = 'يشير إلى ما إذا كانت الكتلة مخفية / مطوية';
$string['region'] = 'منطقة';
$string['restrictpagetypes'] = 'أعرض أنواع الصفحة';
$string['showblock'] = 'عرض الصندوق';
$string['showoncontextandsubs'] = 'أي صفحات اخرى متضمنة به \'{$a}\' أعرض في';
$string['showoncontextonly'] = 'فقط إعرض في \'{$a}\'';
$string['showonentiresite'] = 'إعرض في كافة أنحاء الموقع';
$string['showonfrontpageandsubs'] = 'إعرض في الصفحة الأمامية وأي صفحات مضافة إليها';
$string['showonfrontpageonly'] = 'أعرض في الصفحة الأمامية فقط';
$string['subpages'] = 'إختر الصفحات';
$string['thisspecificpage'] = 'هذه الصفحة بذاتها (صفحة a$)';
$string['undockall'] = 'افتح الكل';
$string['undockblock'] = 'ازالة تصغير الصندوق';
$string['undockitem'] = 'إلغاء إرساء هذه الكتلة';
$string['visible'] = 'مرئي';
$string['weight'] = 'وزن';
$string['wherethisblockappears'] = 'أين تظهر هذه الكتلة';