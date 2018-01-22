
# :white_check_mark: 🇮🇷 🇮🇷 🇮🇷 Regex for Persian (Farsi) Language 🇮🇷 🇮🇷 🇮🇷


#### Collection of Regex for validating, filtering, sanitizing and finding Persian strings.


### Introduction


Because of historical matters, many Arabic characters get a way into Persian language and transformed it, In these years many efforts have been made by government and non-governmental organizations to revivification of authority of Persian language and this is one of them.


#### :eight_pointed_black_star: Notes


* Persian alphabet consists of 32 characters and 3 vowel marks, but for above reasons there are 6 more Arabic characters and 8 more vowel marks that are being used in many texts.


* The important part of this effort, is codepoints range, so you can create your own regex for validating, filtering and finding strings, just put the desired range in it.< br>
for example when string should only contains persian words and spaces just concat space codepoints and persian alpha codepoints in the final Regex and so on.


* Characters in table are sorted by codepoints

* See tests after reading.

---


### :black_square_button: Codepoints Range


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
U+2029	
