<img src="resources/images/php_banner.png" width="1200">

# Piscine_Php - 42 School Two-Weeks Web Boot Camp 

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

### Day 00 - HTML and CSS
This day was about learning how to create elements in HTML and give style with CSS to fictional web pages with re-directional links, tables, images, shrink responsiveness and drop down menus.    
### Day 01 - PHP
From writing the classic "hello world", in this day we started to getting familiar with the PHP syntax by coding some programs to manipulate integers and strings. 
### Day 02 - PHP
A funny mystery story led us through various exercises to discover a little bit more about php's libraries and helpfull functions to access local and external data.

### Day 03 - PHP - MAMP
### Day 04 - PHP - MAMP
### Day 05 - SQL
### Day 06 - PHP - OOP
### Day 07 - PHP - OOP
### Day 08 - Awesome Starships Battles I
### Day 09 - JavaScript and JQuery
### Rush 00 - E-commerce
### Rush 01 - Awesome Starships Battles II

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

## Installation
`make && make clean` | Compiles and creates the library `libftprintf.a`.

`make re && make clean` | Recompiles.

## Usage
`gcc resources/test_main.c libftprintf.a && ./a.out` | Prints the test main provided as example. 

## Input & Output
<img src="resources/images/pf_input.png" width="300">
<img src="resources/images/pf_output.png" width="300">

## Credits
[*Luis Julian Sanchez Quiros*](https://www.linkedin.com/in/luis-juli%C3%A1n-s%C3%A1nchez-quir%C3%B3s-13bb3b189/)
2019. Freemont, CA

## About 42 School
[42][42] is a free, non profit, project-based, peer-to-peer learning coding school. It originated in France and now has over 20 campuses all over the world. More information can be found [here][42]

[42]: http://42.us.org "42 USA"
[pdf]:  "Pdf"
