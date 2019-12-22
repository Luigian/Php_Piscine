# Piscine_Php / day04 / 03 : Auth

## Description
The objective of this exercise was to create four files: 
- login.php: this page will start the session, check the validity of the combo login/passwd 
and store in the session a variable “loggued_on_user”.
- auth.php: is the function that helps login.php to validate the login/passwd combo.
- whoami.php: will use the session cookie to display the login contained in ‘loggued_on_user”.
- logout.php: will remove the session cookie to finish the user's session.

## Installation
`php -S localhost:8080` | start the development server.

## Usage
`curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK 'http://localhost:8080/day04/ex02/modif.php'` | Executes the program.

## Preview
<img src="../../resources/images/modif.png" width="1200">
