<?php
include("header.php");
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
					header('Location: index.html');
					echo "OK\n";
					exit();
				}
				else
				{
					echo "ERROR\n";
					exit();
				}
			}
		}
		echo "ERROR\n";
	}
}
?>
<!DOCTYPE html>
<h2>Change Password</h2>
<html><body>
<form action="modif.php" method="post">
	Username: <input type="text" name="login" value=""/>
	<br />
	Old Password: <input type="password" name="oldpw" value=""/>
	<br />
	New Password: <input type="password" name="newpw" value=""/>
	<br />
	<input type="submit" name="submit" value="OK"/>
</form>
</body></html>
