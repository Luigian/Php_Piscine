#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = preg_replace("~\s+~", " ", $argv[1]);
		$str = trim($str);
		echo "$str\n";
	}
?>
