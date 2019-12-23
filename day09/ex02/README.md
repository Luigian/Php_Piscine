# Php_Piscine / day09 / ex02 : To do or not to do

## Description
The gol for this exercise was to create a basic task manager. There must be a button named ’New’, when clicked it’ll open a text window that will allow the user to fill in a new to do task. Once validated if not empty it must appear at the top of the list. To remove a task from the list, all you have to do is click on it. A configuration window must open and ask whether yes or no you want to remove that task. If you confirm, the task must disappear permanently from the DOM, it can’t just be hididen. Small additional implementation, your list will have to be saved as a cookie. If the list contains some to do tasks when you close you browser, this same list must be loaded and displayed in ’ft_list’. If the cookie(s) do not exist, then the list will be blank.

## Installation
`php -S localhost:8080` | Start the development server.

`open http://localhost:8080/day09/ex02/index.html` | Open the page in the web browser.

## Usage
`click on 'New'` | Enter a new task.

`click on a task` | Confirm to remove.

`reload the page` | The list remains.

## Preview

<kbd><img src="../../resources/images/todo.png" width="1000"></kbd>
