# Count Repeats

##### A Silex app that displays how frequently a word appears in a given string. (8/14/2015)

#### By Logan Wu

## Description
Users input both the word and the string of words to check and the app check for full word matches only.

## Technologies Used

PHP, HTML, CSS, Silex, Twig, PHPUnit, Composer

## Specs

1. If user searches for a word that matches the word in a one-word string, it should return 1 repeat.
    * Input: word="dog"; string="dog"
    * Output: 1

2. If user searches for a word that does not match the word in a one word string, it should return 0 repeat.
    * Input: word="dog"; string="cat"
    * Output: 0

3. If user searches for a word that match a word in a multi-word string once, it should return 1 repeat.
    * Input: word="dog"; string="I love dog."
    * Output: 1

3. If user searches for a word that does not fully match a word in a string, it should return 0 repeat.
    * Input: word="dog"; string="I love dogs."
    * Output: 0

4. Only alphabetic letters are allowed in the word search box.
    * Input: "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "`" "~" "!" "@" "#" "$" "%" "^" "&" "*" "(" ")" "_" "+" "-" "=" "{" "}" "|" "\" ":" """ ";" "'" "<" ">" "?" "," "." "/"
    * Output: "Sorry, please only enter alphabetic words."

5. If empty entry for the word search box, return "Please enter a word to search for."
    * Input: "", "I love dogs."
    * Output: "Please enter a word to search for."

6. If empty entry for the string search box, return "Please enter a line of words to search from."
    * Input: "dog", ""
    * Output: "Please enter a line of words to search from."

## Legal

Copyright (c) 2015 **Logan Wu**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
