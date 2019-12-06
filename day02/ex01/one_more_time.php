#!/usr/bin/php
<?php
	function get_month($str)
	{
		if (ctype_lower($str))
	   		$arr = array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
		else
	   		$arr = array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
		$i = 0;
		while (strcmp($str, $arr[$i++]) != 0)
			;
		return ($i++);
	}	

	$p1 = "~([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)";
	$p2 = "([0-9]|[0-9][0-9])";
	$p3 = "([Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre)";
	$p4 = "([0-9][0-9][0-9][0-9])";
	$p5 = "([0-9][0-9]):([0-9][0-9]):([0-9][0-9])~";
	$pat = array($p1, $p2, $p3, $p4, $p5);
	$pat = join(" ", $pat);
	if ($argc > 1)
	{
		if (preg_match($pat, $argv[1], $matches))
		{
			date_default_timezone_set("Europe/Paris");
			$num = get_month($matches[3]);
			$timestamp = mktime($matches[5], $matches[6], $matches[7], $num, $matches[2], $matches[4]);
			echo "$timestamp\n";
		}
		else
			echo "Wrong Format\n";
	}
?>
