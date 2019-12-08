<?php
	session_start();
	if (!($_SESSION['loggued_on_user']))
	{
		echo "ERROR\n";
		exit();
	}
	if (file_exists('../private') && file_exists('../private/chat'))
	{
		$chat = unserialize(file_get_contents('../private/chat'));
		foreach ($chat as $c)
	   		echo "[".date('H:i', $c['time'])."] <b>".$c['login']."</b>: ".$c['msg']."<br />";
	}
?>
