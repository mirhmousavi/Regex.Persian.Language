<?php

$input = ' ';
$space_codepoints = '\x{0020}\x{2000}-\x{200F}\x{2028}-\x{202F}';
$result = preg_match('/^['.$space_codepoints.']*$/u', $input);
assert($result, 1);



$input = 'ءآأئابةتثجحخدذرزسشصضطظعغفقلمنهوًٌٍَُِّْٕٓٔچژکگھی';
$persian_alpha_codepoints = '\x{0621}-\x{0623}\x{0626}-\x{063A}\x{0641}-\x{0642}\x{0644}-\x{0648}\x{064B}-\x{0655}\x{067E}\x{0686}\x{0698}\x{06A9}-\x{06AF}\x{06BE}\x{06CC}';

$result = preg_match('/^['.$persian_alpha_codepoints.']*$/u', $input);
assert($result, 1);



$input = '۰۱۲۳۴۵۶۷۸۹';
$persian_num_codepoints = '\x{06F0}-\x{06F9}';
$result = preg_match('/^['.$persian_num_codepoints.']*$/u', $input);
assert($result, 1);



$input = '،؛؟ـ٪٫٬';
$punctuation_marks_codepoints = '\x{060C}\x{061B}\x{061F}\x{0640}\x{066A}\x{066B}\x{066C}';
$result = preg_match('/^['.$punctuation_marks_codepoints.']*$/u', $input);
assert($result, 1);



$input = 'ؤإكىيە';
$additional_arabic_characters_codepoints ='\x{0624}-\x{0625}\x{0643}\x{0649}-\x{064A}\x{06D5}';
$result = preg_match('/^['.$additional_arabic_characters_codepoints.']*$/u', $input);
assert($result, 1);



$input = '٠١٢٣٤٥٦٧٨٩';
$arabic_numbers_codepoints ='\x{0660}-\x{0669}';
$result = preg_match('/^['.$arabic_numbers_codepoints.']*$/u', $input);
assert($result, 1);



$input='این یک نوشته است ض ص ث ق ف غ ع ه خ ح ج چ پ گ ک م ن ت ا ل ب ی س ش ظ ط ز ر ذ د ئ و ةيژؤإأءآًٌٍَُِّ۷۷۷،؛؟';
$result = preg_match('/^['.$persian_alpha_codepoints.$additional_arabic_characters_codepoints.
                           $space_codepoints.$punctuation_marks_codepoints.
                           $persian_num_codepoints.']*$/u', $input);
assert($result, 1);