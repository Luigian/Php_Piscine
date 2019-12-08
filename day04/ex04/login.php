<?php
include "auth.php";
session_start();
if ($_POST["login"] && $_POST["passwd"])
{
	$login = $_POST["login"];
	$passwd = $_POST["passwd"];
	if (auth($login, $passwd))
	{
		$_SESSION["loggued_on_user"] = $login;
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta charset="UTF-8">
			<title>42Chat</title>
		</head>
		<body>
			<iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
			<iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
		</body>
		</html>
		<?php
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR\n";
	}
}
else
	echo "ERROR\n";
?>
