# Count Repeats

##### A Silex app that displays how frequently a word appears in a given string. (8/14/2015)

#### By Logan Wu

## Description
The user input both the word and the string of words to check and the app check for full word matches only.

## Technologies Used

PHP, HTML, CSS, Silex, Twig, PHPUnit, Composer

## Specs

1. If user enters A, it should return score 1.
  * Input: "A"
  * Output: 1

2. If user enters A, E, I, O, U, L, N, R, S, or T, it should return score 1.
  * Input: "E"
  * Output: 1

3. If user enters D, or G, it should return score 2.
  * Input: "D"
  * Output: 2

4. If user enters B, C, M, or P, it should return score 3.
  * Input: "B"
  * Output: 3

5. If user enters F, H, V, W, or Y , it should return score 4.
  * Input: "F"
  * Output: 4

6. If user enters K, it should return score 5.
  * Input: "K"
  * Output: 5

7. If user enters J, or X, it should return score 8.
  * Input: "J"
  * Output: 8

8. If user enters Q, or Z, it should return score 10.
  * Input: "Q"
  * Output: 10

9. Convert to capitalized letters only
  * Input: "a"
  * Output: 1

10. Allow multiple letters
  * Input: "AEI"
  * Output: 3

11. Only alphabetic letters are allowed
  * Input: 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ` ~ ! @ # $ % ^ & * ( ) _ + - = { } | \ : " ; ' < > ? , . /
  * Output: "Sorry, please only enter alphabetic letters."

12. Only 7 or less letters are allowed
  * Input: "ABCDEFGH"
  * Output: "Sorry, please only enter 7 letters or less."

## Legal

Copyright (c) 2015 **Logan Wu**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
