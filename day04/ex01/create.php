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
				echo "ERROR\n";
				exit();
			}
		}
	}
	$user["login"] = $_POST["login"];
	$user["passwd"] = hash('whirlpool', $_POST["passwd"], 0);
	$accounts[] = $user;
	file_put_contents("../private/passwd", serialize($accounts));
	echo "OK\n";
}
else
	echo "ERROR\n";
?>
