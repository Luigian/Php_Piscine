<?php
	session_start();
if ($_SESSION["loggued_on_user"])
	include("header_log.php");
else
	include("header.php");
?>

<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basket</title>
        <link rel="stylesheet" type="text/css" href="basket.css"/>
    </head>
	<h2>Basket</h2>
	<form action="basket.php" method="post">
			<input type="submit" name="submit" value="pay"/>
	</form>
<?php
if ($_POST["submit"] == "pay")
{
	if ($_SESSION["loggued_on_user"])
	{
	?>
		<h3>"Thanks for Shopping in TAB"</h3>
		<div class="linktext">
			<a class="link2" href="shop.php">Shop More</a>
		</div>
	<?php
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
	?>
	<h3>"Oops! You need to Login to pay"</h3>
	<div class="linktext">
		<a class="link2" href="login.php">Login</a>
	</div>
	<?php
	}		
}
include("footer.php");
?>
