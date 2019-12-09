<?php
session_start();
include("header_log.php");
include "auth.php";
?>
<html><body>
<h2>MyAccount</h2>
<h3>Change Password</h3>
<form action="modif.php" method="post">
	Username: <input type="text" name="login" value=""/>
	<br />
	Old Password: <input type="password" name="oldpw" value=""/>
	<br />
	New Password: <input type="password" name="newpw" value=""/>
	<br />
	<input type="submit" name="submit" value="OK"/>
</form>
<?php
if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] == "OK")
{
	if (!file_exists("../private") || !file_exists('../private/passwd'))
		echo "ERROR\n";
	else
	{
		$accounts = unserialize(file_get_contents("../private/passwd"));
		foreach($accounts as $a => $user)
		{
			if ($user["login"] === $_POST["login"])
			{
				$oldpw_hash = hash('whirlpool', $_POST["oldpw"], 0);
				if ($user["passwd"] === $oldpw_hash)
				{
					$accounts[$a]["passwd"] = hash('whirlpool', $_POST["newpw"], 0);
					file_put_contents("../private/passwd", serialize($accounts));
					?>
					<h3>"Password changed succesfully"</h3>
					<?php
				}
				else
				{
					?>
					<h3>"Invalid password, please try again."</h3>
					<?php
				}
			}
		}
		?>
		<h3>"Invalid password, please try again."</h3>
		<?php
	}
}
?>
<h3>Delete Account</h3>
<form action="modif.php" method="post">
	<input type="submit" name="submit" value="delete account"/>
</form>
</body></html>
<?php
if ($_POST["submit"] == "delete account")
{
	$accounts = unserialize(file_get_contents("../private/passwd"));
	$accounts["login"] = "";
	$accounts["passwd"] = "";
	file_put_contents("../private/passwd", serialize($accounts));
	?>
	<h3>"Account deleted succesfully"</h3>
	<div class="linktext">
		<a class="link2" href="logout.php">Exit</a>
	</div>
	<?php
}	
include("footer.php");
?>
