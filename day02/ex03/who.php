#!/usr/bin/php
<?php

	date_default_timezone_set('America/Los_Angeles');
	$fd = fopen("/var/run/utmpx", "r");
	while ($str = fread($fd, 628))
	{
		$str = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $str);
		if ($str["type"] == 7)
			$user[$str["line"]] = array("user" => $str["user"], "time" => $str["time1"]);
	}
	ksort($user);
	foreach($user as $line => $data)
	{
		echo $data["user"]." ".substr($line, 0, 7)."  ".date("M  j H:i", $data["time"])."\n";
	}

?>
