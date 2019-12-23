# Piscine_Php / day05 / 00 : db_bocal

## Description
The objective was to write the SQL request needed to create a database named after our login preceded by ’db_’. This database will be used for the next exercises.

## Installation
`mysql` | connect to local MySQL server.

## Usage
`curl -c [user cookie file path] -d login=[name] -d passwd=[password] 'http://localhost:8080/day04/ex04/login.php'` | Executes login.php and open the chat window.

`curl -b [user cookie file path] -d submit=OK -d msg=[message] 'http://localhost:8080/day04/ex04/speak.php'` | Executes speak.php and save the message in the cookie file.

`curl -b [user cookie file path] 'http://localhost:8080/day04/ex04/chat.php'` | Executes chat.php and display the messages contained in the cookie file.

## Preview
<img src="../../resources/images/chat.png" width="1200">
