# Word Counter

##### User input a phrase and a word. The app tells you how many times the word appears, 08/14/2015

#### By _**Ben Spenard**_

## Description

The user inputs a phrase and a word. The app tells you how many times the word appears in the phrase. The app can search within a phrase of any length but it can only search for one word at a time. The app works by looping through each word of the phrase and comparing the user's word with matching words in the phrase. The app then counts how many matches occur and returns that number to the user.
    If anybody would like to use this code for a project of theirs. Feel free.

## Setup

* Use the command $ git clone https://github.com/bdspen/RepeatCounter.git
to copy all of the files in this repository to a directory of your choosing on your computer.
* navigate into that folder in the command line and run this command $ composer install To get composer see here: https://www.learnhowtoprogram.com/lessons/composer-monday-homework

* open a new command line window and navigate to the project folder that you created, cd into the web folder and run this command: php -S localhost:8000

* now in your browser go to http://localhost:8000/
* the app should run there.

## Technologies Used

The project is built with PHP.  Also Silex, Twig and PHPUnit are used.

### Legal

Copyright (c) 2015 **_Ben Spenard_**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
