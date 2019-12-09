<?php
session_start();
include("header.php");
include "auth.php";
?>
<!DOCTYPE html>
<h2>Login</h2>
<html><body>
<form action="login.php" method="post">
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
	$login = $_POST["login"];
	$passwd = $_POST["passwd"];
	if (auth($login, $passwd))
	{
		$_SESSION["loggued_on_user"] = $login;
	?>
		<h3>"Welcome!, please press enter"</h3>
		<div class="linktext">
			<a class="link2" href="shop.php">Enter</a>
		</div>
	<?php
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
	?>
	<h3>"Oops! username or password not found. Please try again"</h3>
	<?php
	}
}	
else
{
?>
	<h3>"Please enter your username and password"</h3>
	<div class="linktext">
		<a class="link" href="create.php">Not yet Registered?</a>
	</div>
<?php
}
include("footer.php");
?>
