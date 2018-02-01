import re

input=' '
space_codepoints ='\u0020\u2000-\u200F\u2028-\u202F'
result=re.search('^['+space_codepoints+']*$', input)
assert result



input='ءآأؤإئابتثجحخدذرزسشصضطظعغفقلمنهوَُِّٕپچژکگھی'
persian_alpha_codepoints = '\u0621-\u0628\u062A-\u063A\u0641-\u0642\u0644-\u0648\u064E-\u0651\u0655\u067E\u0686\u0698\u06A9\u06AF\u06BE\u06CC'
result=re.search('^[\s'+persian_alpha_codepoints+']*$', input)
assert result



input='۰۱۲۳۴۵۶۷۸۹'
persian_num_codepoints = '\u06F0-\u06F9'
result=re.search('^['+persian_num_codepoints+']*$', input)
assert result



input='،؛؟ـ٪٫٬'
punctuation_marks_codepoints = '\u060C\u061B\u061F\u0640\u066A\u066B\u066C'
result=re.search('^['+punctuation_marks_codepoints+']*$', input)
assert result



input='ًٍەيىك'
additional_arabic_characters_codepoints = '\u0629\u0643\u0649-\u064B\u064D\u06D5'
result=re.search('^['+additional_arabic_characters_codepoints+']*$', input)
assert result



input='٠١٢٣٤٥٦٧٨٩'
arabic_numbers_codepoints = '\u0660-\u0669'
result=re.search('^['+arabic_numbers_codepoints+']*$', input)
assert result



input='۷۷۷،؛؟   ءآأؤإئابتثجحخدذرزسشصضطظعغفقلمنهوَُِّٕپچژکگھی'
result=re.search('^[\s,'+persian_alpha_codepoints+additional_arabic_characters_codepoints
                     +punctuation_marks_codepoints+
                     persian_num_codepoints+']*$', input)
assert result
