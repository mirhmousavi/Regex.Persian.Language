
# 🇮🇷 🇮🇷 🇮🇷 Regex for Persian (Farsi) Language 🇮🇷 🇮🇷 🇮🇷


## Collection of Regex for validating, filtering, sanitizing and finding Persian strings



### Introduction


Because of historical matters, many Arabic characters get a way into Persian language and transformed it, In these years many efforts have been made by government and non-governmental organizations to revivification of authority of Persian language and this is one of them.



#### :eight_pointed_black_star: Notes


* Persian alphabet consists of 32 characters and 3 vowel marks, but for above reasons there are 6 more Arabic characters and 8 more vowel marks that are being used in many texts.


* The important part of this effort, is codepoints range, so you can create your own regex for validating, filtering and finding strings, just put the desired range in it.< br>
for example when string should only contains persian words and spaces just concat space codepoints and persian alpha codepoints in the final Regex and so on.


* Characters in table are sorted by codepoints


* Don't put Regex in multiline because space will be included.


* See tests after reading.



---


## :black_square_button: Codepoints Range


### :white_square_button: Space


This ranges include all kind of space, specially zero-width space that massively are using in Persian texts.


```
U+0020
U+2000-U+200F
U+2028-U+202F
```


code point | character | hex    | name
-----------|-----------|--------|---------------------
U+0020	   |	       |20	    |SPACE
U+2000	   |           |e2 80 80| EN QUAD
U+2001	   |           |e2 80 81| EM QUAD
U+2002	   |	       |e2 80 82| EN SPACE
U+2003	   |	       |e2 80 83| EM SPACE
U+2004	   |	       |e2 80 84| THREE-PER-EM SPACE
U+2005	   |	       |e2 80 85| FOUR-PER-EM SPACE
U+2006	   |	       |e2 80 86| SIX-PER-EM SPACE
U+2007	   |	       |e2 80 87| FIGURE SPACE
U+2008	   |	       |e2 80 88| PUNCTUATION SPACE
U+2009	   |	       |e2 80 89| THIN SPACE
U+200A	   |	       |e2 80 8a| HAIR SPACE
U+200B	​   |	       |e2 80 8b| ZERO WIDTH SPACE
U+200C	‌   |	       |e2 80 8c| ZERO WIDTH NON-JOINER
U+200D	‍   |	       |e2 80 8d| ZERO WIDTH JOINER
U+200E	‎   |	       |e2 80 8e| LEFT-TO-RIGHT MARK
U+200F	‏   |           |e2 80 8f| RIGHT-TO-LEFT MARK
U+2028     |	       |e2 80 a8| LINE SEPARATOR
U+2029	   |	       |e2 80 a9| PARAGRAPH SEPARATOR
U+202A	‪   |	       |e2 80 aa| LEFT-TO-RIGHT EMBEDDING
U+202B	‫   |	       |e2 80 ab| RIGHT-TO-LEFT EMBEDDING
U+202C	‬   | 	       |e2 80 ac| POP DIRECTIONAL FORMATTING
U+202D	‭   |	       |e2 80 ad| LEFT-TO-RIGHT OVERRIDE
U+202E	‮   |	       |e2 80 ae| RIGHT-TO-LEFT OVERRIDE
U+202F	   |           |e2 80 af| NARROW NO-BREAK SPACE


#### :small_orange_diamond: Implemention


```python
# python
space_codepoints ='\u0020\u2000-\u200F\u2028-\u202F'
```


```php
// php
$space_codepoints = '\x{0020}\x{2000}-\x{200F}\x{2028}-\x{202F}';
```


```javascript
// javascript
var space_codepoints ='\u0020\u2000-\u200F\u2028-\u202F';
```


---


### :white_square_button: Persian alphabet (49 characters)


#### :small_orange_diamond: Allowed characters


ءآأئابةتثجحخدذرزسشصضطظعغفقلمنهوًٌٍَُِّْٕٓٔپچژکگھی


```
U+0621-U+0623
U+0626-U+063A
U+0641-U+0642
U+0644-U+0648
U+064B-U+0655
U+067E
U+0686
U+0698
U+06A9-U+06AF
U+06BE
U+06CC
```


code point | character | hex   | name
-----------|-----------|-------|---------------------
U+0621    | ء        | d8 a1 | ARABIC LETTER HAMZA
U+0622    | آ	       | d8 a2 | ARABIC LETTER ALEF WITH MADDA ABOVE
U+0623	   | أ	       | d8 a3 | ARABIC LETTER ALEF WITH HAMZA ABOVE
U+0626	   | ئ	       | d8 a6 | ARABIC LETTER YEH WITH HAMZA ABOVE
U+0627	   | ا	       | d8 a7 | ARABIC LETTER ALEF
U+0628	   | ب	       | d8 a8 | ARABIC LETTER BEH
U+0629	   | ة	       | d8 a9 | ARABIC LETTER TEH MARBUTA
U+062A	   | ت	       | d8 aa | ARABIC LETTER TEH
U+062B	   | ث	       | d8 ab | ARABIC LETTER THEH
U+062C	   | ج	       | d8 ac | ARABIC LETTER JEEM
U+062D	   | ح	       | d8 ad | ARABIC LETTER HAH
U+062E	   | خ	       | d8 ae | ARABIC LETTER KHAH
U+062F	   | د	       | d8 af | ARABIC LETTER DAL
U+0630	   | ذ	       | d8 b0 | ARABIC LETTER THAL
U+0631	   | ر	       | d8 b1 | ARABIC LETTER REH
U+0632	   | ز	       | d8 b2 | ARABIC LETTER ZAIN
U+0633	   | س	       | d8 b3 | ARABIC LETTER SEEN
U+0634	   | ش	       | d8 b4 | ARABIC LETTER SHEEN
U+0635	   | ص	       | d8 b5 | ARABIC LETTER SAD
U+0636	   | ض	       | d8 b6 | ARABIC LETTER DAD
U+0637	   | ط	       | d8 b7 | ARABIC LETTER TAH
U+0638	   | ظ        | d8 b8 | ARABIC LETTER ZAH
U+0639	   | ع	       | d8 b9 | ARABIC LETTER AIN
U+063A	   | غ	       | d8 ba | ARABIC LETTER GHAIN
U+0641	   | ف	       | d9 81 | ARABIC LETTER FEH
U+0642	   | ق	       | d9 82 | ARABIC LETTER QAF
U+0644	   | ل	       | d9 84 | ARABIC LETTER LAM
U+0645	   | م	       | d9 85 | ARABIC LETTER MEEM
U+0646	   | ن	       | d9 86 | ARABIC LETTER NOON
U+0647	   | ه	       | d9 87 | ARABIC LETTER HEH
U+0648	   | و	       | d9 88 | ARABIC LETTER WAW
U+064B	   | ً	       | d9 8b | ARABIC FATHATAN
U+064C	   | ٌ	       | d9 8c | ARABIC DAMMATAN
U+064D	   | ٍ	       | d9 8d | ARABIC KASRATAN
U+064E	   | َ	       | d9 8e | ARABIC FATHA
U+064F	   | ُ	       | d9 8f | ARABIC DAMMA
U+0650	   | ِ     	| d9 90 | ARABIC KASRA
U+0651	   | ّ	       | d9 91 | ARABIC SHADDA
U+0652	   | ْ	       | d9 92 | ARABIC SUKUN
U+0653	   | ٓ     	| d9 93 | ARABIC MADDAH ABOVE
U+0654	   | ٔ	       | d9 94 | ARABIC HAMZA ABOVE
U+0655	   | ٕ	       | d9 95 |ARABIC HAMZA BELOW
U+067E	   | پ	       | d9 be |	ARABIC LETTER PEH
U+0686	   | چ	       | da 86 | ARABIC LETTER TCHEH
U+0698	   | ژ	       | da 98 | ARABIC LETTER JEH
U+06A9	   | ک	       | da a9 | ARABIC LETTER KEHEH
U+06AF	   | گ	       | da af | ARABIC LETTER GAF
U+06BE	   | ھ	       | da be | ARABIC LETTER HEH DOACHASHMEE
U+06CC	   | ی	       | db 8c | ARABIC LETTER FARSI YEH


#### :small_orange_diamond: Implemention


```python
# python
persian_alpha_codepoints = '\u0621-\u0623\u0626-\u063A\u0641-\u0642\u0644-\u0648\u064B-\u0655\u067E\u0686\u0698\u06A9-\u06AF\u06BE\u06CC'
```


```php
// php
$persian_alpha_codepoints = '\x{0621}-\x{0623}\x{0626}-\x{063A}\x{0641}-\x{0642}\x{0644}-\x{0648}\x{064B}-\x{0655}\x{067E}\x{0686}\x{0698}\x{06A9}-\x{06AF}\x{06BE}\x{06CC}';
```


```javascript
// javascript
var persian_alpha_codepoints = '\u0621-\u0623\u0626-\u063A\u0641-\u0642\u0644-\u0648\u064B-\u0655\u067E\u0686\u0698\u06A9-\u06AF\u06BE\u06CC';
```


---


### :white_square_button: Persian numbers


#### :small_orange_diamond: Allowed characters


۰۱۲۳۴۵۶۷۸۹


```
U+06F0-U+06F9
```


code point | character | hex   | name
-----------|-----------|-------|---------------------
U+06F0	   | ۰	       | db b0 | EXTENDED ARABIC-INDIC DIGIT ZERO
U+06F1	   | ۱	       | db b1 | EXTENDED ARABIC-INDIC DIGIT ONE
U+06F2	   | ۲	       | db b2 | EXTENDED ARABIC-INDIC DIGIT TWO
U+06F3	   | ۳	       | db b3 | EXTENDED ARABIC-INDIC DIGIT THREE
U+06F4	   | ۴	       | db b4 | EXTENDED ARABIC-INDIC DIGIT FOUR
U+06F5	   | ۵	       | db b5 | EXTENDED ARABIC-INDIC DIGIT FIVE
U+06F6	   | ۶	       | db b6 | EXTENDED ARABIC-INDIC DIGIT SIX
U+06F7	   | ۷	       | db b7 | EXTENDED ARABIC-INDIC DIGIT SEVEN
U+06F8	   | ۸	       | db b8 | EXTENDED ARABIC-INDIC DIGIT EIGHT
U+06F9	   | ۹	       | db b9 | EXTENDED ARABIC-INDIC DIGIT NINE


#### :small_orange_diamond: Implemention


```python
# python
persian_num_codepoints = '\u06F0-\u06F9'
```


```php
// php
$persian_num_codepoints = '\x{06F0}-\x{06F9}';
```


```javascript
// javascript
var persian_num_codepoints = '\u06F0-\u06F9';
```


---


### :white_square_button: Persian(Arabic) punctuation marks


#### :small_orange_diamond: Allowed characters


،؛؟ـ٪٫٬


```
U+060C
U+061B
U+061F
U+0640
U+066A
U+066B
U+066C
```


code point | character | hex   | name
-----------|-----------|-------|---------------------
U+060C	   | ،	       | d8 8c | ARABIC COMMA
U+061B	   | ؛	       | d8 9b | ARABIC SEMICOLON
U+061F	   | ؟	       | d8 9f | ARABIC QUESTION MARK
U+0640	   | ـ	       | d9 80 | ARABIC TATWEEL
U+066A	   | ٪	       | d9 aa | ARABIC PERCENT SIGN
U+066B	   | ٫	       | d9 ab | ARABIC DECIMAL SEPARATOR
U+066C	   | ٬	       | d9 ac | ARABIC THOUSANDS SEPARATOR


#### :eight_pointed_black_star: for more common punctutation marks like `” | « | » | ?| ; | : | ...` <br> see [general punctuation page in unicode](https://unicode-table.com/en/blocks/general-punctuation/)


```python
# python
punctuation_marks_codepoints = '\u060C\u061B\u061F\u0640\u066A\u066B\u066C'
```


```php
// php
$punctuation_marks_codepoints = '\x{060C}\x{061B}\x{061F}\x{0640}\x{066A}\x{066B}\x{066C}';
```


```javascript
// javascript
var punctuation_marks_codepoints = '\u060C\u061B\u061F\u0640\u066A\u066B\u066C';
```


---


### :white_square_button: Additional Arabic characters


:eight_pointed_black_star: These characters used in old Persian texts.


#### :small_orange_diamond: Allowed characters


ؤإكىيە


```
U+0624-U+0625
U+0643
U+0649-U+064A
U+06D5
```


code point | character | hex   | name
-----------|-----------|-------|---------------------
U+0624	   | ؤ	       | d8 a4 | ARABIC LETTER WAW WITH HAMZA ABOVE
U+0625	   | إ	       | d8 a5 | ARABIC LETTER ALEF WITH HAMZA BELOW
U+0643	   | ك	       | d9 83 | ARABIC LETTER KAF
U+0649	   | ى	       | d9 89 | ARABIC LETTER ALEF MAKSURA
U+064A	   | ي	       | d9 8a | ARABIC LETTER YEH
U+06D5	   | ە	       | db 95 | ARABIC LETTER AE


#### :small_orange_diamond: Implemention


```python
# python
additional_arabic_characters_codepoints = '\u0624-\u0625\u0643\u0649-\u064A\u06D5'

```


```php
$additional_arabic_characters_codepoints ='\x{0624}-\x{0625}\x{0643}\x{0649}-\x{064A}\x{06D5}';
```


```javascript
// javascript
var additional_arabic_characters_codepoints = '\u0624-\u0625\u0643\u0649-\u064A\u06D5';
```


---


### :white_square_button: Arabic numbers


#### :small_orange_diamond: Allowed characters


٠١٢٣٤٥٦٧٨٩


```
U+0660-U+0669
```


code point | character | hex   | name
-----------|-----------|-------|---------------------
U+0660	   | ٠	       | d9 a0 | ARABIC-INDIC DIGIT ZERO
U+0661	   | ١	       | d9 a1 | ARABIC-INDIC DIGIT ONE
U+0662	   | ٢	       | d9 a2 | ARABIC-INDIC DIGIT TWO
U+0663	   | ٣	       | d9 a3 | ARABIC-INDIC DIGIT THREE
U+0664	   | ٤	       | d9 a4 | ARABIC-INDIC DIGIT FOUR
U+0665	   | ٥	       | d9 a5 | ARABIC-INDIC DIGIT FIVE
U+0666	   | ٦	       | d9 a6 | ARABIC-INDIC DIGIT SIX
U+0667	   | ٧	       | d9 a7 | ARABIC-INDIC DIGIT SEVEN
U+0668	   | ٨	       | d9 a8 | ARABIC-INDIC DIGIT EIGHT
U+0669	   | ٩	       | d9 a9 | ARABIC-INDIC DIGIT NINE


#### :small_orange_diamond: Implemention


```python
# python
arabic_numbers_codepoints = '\u0660-\u0669'
```


```php
// php
$arabic_numbers_codepoints ='\x{0660}-\x{0669}';
```


```javascript
var arabic_numbers_codepoints = '\u0660-\u0669';
```



:checkered_flag::checkered_flag::checkered_flag:


