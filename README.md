<img src="resources/images/php_banner.png" width="1200">

# Piscine_Php - 42 School Two Weeks Web Boot Camp 

## Highlights

* This project is about re-building the printf function with most of its functionality by using only other self-built functions based on the C standard library.

* ft_printf writes output to stdout according to a format and returns the number of characters printed or a negative number in case of error.  

* ft_printf is prototyped similarly to printf: `int ft_printf(const char* format, ...)`

* ft_printf is a variadic function wich means that it can print a varying number of arguments of varying types.

* The string `const char* format` is composed by ordinary characters (not %), which are copied unchanged to the output; and conversion specifications introduced by `%` and ended by the type of conversion which must correspond properly to the next argument in the argument list `...`. The following may appear in a conversion sequence: 

  `%[argument][flag][width][precision][length]type`
  
* ft_printf is a great opportunity to implement a basic 'dispatcher' in C via the use of an array of function’s pointers. 

## Functions Hierarchy
<img src="resources/images/pf_funhierarchy.png" width="1000">

## Summary of the Piscine

### Day 00
HTML and CSS

This day was about learning how to create elements in HTML and give style with CSS to fictional web pages with re-directional links, tables, images, shrink responsiveness and drop down menus.    
### Day 01
PHP

From writing the classic "hello world", in this day we started to getting familiar with the PHP syntax by coding some programs to manipulate integers and strings. 
### Day 02
PHP

A funny mystery story led us through various exercises to discover a little bit more about php's libraries and helpfull functions to access local and external data.

### Day 03
PHP - MAMP

After installing our web server with the 42 PAMP tool (or localhost) we wrote php codes capable of recovering users and passwords, saving and deleting cookies, displaying images in the browser window and validating member access to fictional web pages.

### Day 04
PHP - MAMP

In this day we created different pages to manage a user session. The exercises were about creating an account, login (authorization via a self-build function), changing the password and be able to save in a file certain data to create a basic multi-user chat page.

### Day 05
SQL

Is the start of the second week and now we were writing more than twenty different commands to work with databases using SQL language. The exercises covered creation of databases and tables, inserting, updating, and selection of data. By combining some functions we were able to display specific and requiered data from a quite long fictional film database provided to us.

### Day 06
PHP - OOP

This day we learned about how to implement object-oriented programming (OOP) in PHP. The excercises guided us to create a small program to display 3D graphics. Each class covered one graphic aspect: color, dots, lines, matrixes, camera and texture. We learned about attributes and methods (static, dynamic, public and private), instances and proper class documentation.

### Day 07
PHP - OOP

A day dedicated to Game of Thrones, allowed us to better understand the logic of object-oriented programming, particularly inheritance (parent and child classes), abstract classes, abstract methods and interfaces, in a really fun way.

### Day 08
Awesome Starships Battles I

This day we covered the utilisation of traits (inheritance but in an horizontal point of view), final classes, exceptions (handling errors), reflection classes and reflection objects (recover and manipulate the data inside). The exercise goal was to create a game called "Awesome Starships Battles", a 2 players game which goal is to control a fleet of spaceships and eliminate the adversary fleet first. The composition of this game was very convenient to put togheter PHP-OOP, HTML and CSS.

### Day 09
JavaScript and JQuery

The las day of the piscine was dedicated to learn the syntax and functions of JavaScript, and throught DOM (Document Object Modeling) we created interactive web pages setting mouse and keyboard events to affect the appearence of HTML elements. Finally we get involved with the JQuery library and AJAX to update parts of a web page without reloading the whole page (asynchronous execution).

### Rush 00
E-commerce

After the first week of the piscine, we had to -in a weekend– create a mini e-commerce online shop. This should cover products and users management with a well organized data base. Our e-commerce should allow a user to register, connect, add articles in his basket and validate his order. Once validated, the order must be visible from an administration section.

### Rush 01
Awesome Starships Battles II

This is an ambitious project that aims to gather all the tools learned during this boot-camp. This second rush was about remasterizing the game created at day 08, and adding account management, users ranking, chat panel, simultaneously games, scripted games and other cool features alike. 

## Process Logbook

As they say: "The key to a successful ft_printf is a well-structured and good extensible code", so i try to give me the time to understand how the true printf worked to be prepared for the battle and this is the summary of what I did:

* Read the pdf.
* Read about variadic functions on internet.
* Read the man: `man 3 stdarg` `man printf` `man 3 printf`.
* Learn about format conversion specifications for printf.
* Learn more about data types.
* Learn about integers lengths: `char`, `short`, `long`, `long long`, `nan`.
* Learn about floats: single precision, double precision and extended precision. 
* I made the next table to visualize the last two points:
<img src="resources/images/pf_lengths_table.png" width="1000">

* I made the following table to help me see, by testing the real printf, how the different types worked with the different combinations of format specifications.
<img src="resources/images/pf_fmtspecs_table_1.png" width="1000">

* An extension of the previous table with a more concise display was very practical while coding.
<img src="resources/images/pf_fmtspecs_table_2.png" width="700">

After this, i started to write the code in the following order:

* Storing the format specifications (flags, width, precision, length) in variables of a structure.
* The functions to print d, i and u.
* Then the functions to print o, x, X and p.
* Then the functions to print c, s.
* The most difficult one for me, the function to print f.
* Then i worked on big numbers (negatives and positives), zero and null cases.
* After that, i started with bonuses: \*, j, z, U, e, g, $, ', b and k.

## Credits
[*Luis Julian Sanchez Quiros*](https://www.linkedin.com/in/luis-juli%C3%A1n-s%C3%A1nchez-quir%C3%B3s-13bb3b189/)
2019. Freemont, CA

## About 42 School
[42][42] is a free, non profit, project-based, peer-to-peer learning coding school. It originated in France and now has over 20 campuses all over the world. More information can be found [here][42]

[42]: http://42.us.org "42 USA"
[pdf]:  "Pdf"
