#!/usr/bin/php
<?php

	function ft_replace($matches)
	{
		$new = strtoupper($matches[1]);
		$str = str_replace($matches[1], $new, $matches[0]);	
		return ($str);
	}

	if ($argc != 2)
		exit();

	$fd = fopen($argv[1], "r");
	while ($line = fgets($fd))
	{
		$line = preg_replace_callback('~<a.*?title=(".*?")>~', 'ft_replace', $line);	
		$line = preg_replace_callback('~<a.*?>(.*?)<~', 'ft_replace', $line);	
 		echo $line;
	}

?>
