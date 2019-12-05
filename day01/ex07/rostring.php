#!/usr/bin/php
<?php
	if($argc < 2)
		exit();
	$biarray = explode(" ", $argv[1]);
	$filtered = array_filter($biarray);
	$indexed = array_values($filtered);
	$n = count($indexed);
	$i = 1;
	while ($i < $n)
	{
		echo "$indexed[$i]";
		$i++;
			echo " ";
	}
	if ($n)
		echo "$indexed[0]\n";
?>
