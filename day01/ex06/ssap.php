#!/usr/bin/php
<?php

function ft_split($str)
{
	$biarray = explode(" ", $str);
	$indexed = array_values(array_filter($biarray));
	return ($indexed);
}

if ($argc < 2)
	exit();

$i = 1;
$x = 0;
$n = $argc;
$a = array();
while ($i < $n)
{
	$tmp = ft_split($argv[$i]);
	$nn = count($tmp);
	$j = 0;
	while ($j < $nn)
		$a[$x++] = $tmp[$j++];
	$i++;
}
sort($a);

$n = count($a);
$i = 0;
while ($i < $n)
{
	echo "$a[$i]\n";
	$i++;
}

?>
