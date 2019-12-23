<?php

mysql_connect("localhost:/Users/bocal/Desktop/mathieu/mysql/tmp/mysql.sock", "root", $_ENV['PASS']) or die('Error : ' . mysql_error());

mysql_select_db("sql42");

$res = mysql_query("SELECT 1 FROM User WHERE nom = '" . mysql_real_escape_string($argv[1]) . "' AND pass = '" . mysql_real_escape_string($argv[2]) . "';");

$res = mysql_fetch_array($res);

if( $res === false)
	print "Wrong password\n";
else
	print "Good password\n";
?>
