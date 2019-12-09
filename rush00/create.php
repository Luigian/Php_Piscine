<?php
include("header.php");
?>
<!DOCTYPE html>
<h2>Register</h2>
<html><body>
<form action="create.php" method="post">
	Username: <input type="text" name="login" value=""/>
	<br />
	Password: <input type="password" name="passwd" value=""/>
	<br />
	<input type="submit" name="submit" value="OK"/>
</form>
</body></html>
<?php
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] == "OK")
{
	if (!file_exists("../private"))
		mkdir("../private");
	if (file_exists('../private/passwd'))
	{
		$accounts = unserialize(file_get_contents("../private/passwd"));
		foreach($accounts as $a => $user)
		{
			if ($user["login"] === $_POST["login"])
			{
				?>
				<h3>"User already exist. Please choose another."</h3>
				<?php
				include("footer.php");
				exit();
			}
		}
	}
	$user["login"] = $_POST["login"];
	$user["passwd"] = hash('whirlpool', $_POST["passwd"], 0);
	$accounts[] = $user;
	file_put_contents("../private/passwd", serialize($accounts));
?>
	<h3>"Account succesful created!"</h3>
	<div class="linktext">
		<a class="link" href="login.php">Login</a>
	</div>
<?php
}
else
{
?>
	<h3>"Please enter a new username and password."</h3>
<?php
}
include("footer.php");
?>
