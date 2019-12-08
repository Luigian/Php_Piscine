<?php
	session_start();
	if (!($_SESSION['loggued_on_user']))
	{
		echo "ERROR\n";
		exit();
	}
	if ($_POST['msg'])
	{
		if (!file_exists('../private'))
			mkdir("../private");
		if (!file_exists('../private/chat'))
			file_put_contents('../private/chat', null);
		$chat = unserialize(file_get_contents('../private/chat'));
		$fd = fopen('../private/chat', "w");
		flock($fd, LOCK_EX);
		$data["login"] = $_SESSION['loggued_on_user'];
		$data["time"] = time() - 201600;
		$data["msg"] = $_POST["msg"];
		$chat[] = $data;
		file_put_contents('../private/chat', serialize($chat));
		fclose($fd);
	}
?>
<html>
<head>
	<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
<body>
	<form action="speak.php" method="POST">
		<input type="text" name="msg" value=""/>
		<input type="submit" name="submit" value="Send"/>
	</form>
</body>
</html>
