<?php
function auth($login, $passwd)
{
	if (!$login || !$passwd)
		return false;
	if (!file_exists("../private") || !file_exists('../private/passwd'))
		return false;	
	$passhash = hash('whirlpool', $passwd, 0);
	$accounts = unserialize(file_get_contents("../private/passwd"));
	foreach($accounts as $a => $user)
	{
		if ($user["login"] === $login && $user["passwd"] === $passhash)
			return true;
	}
	return false;
}
?>
