#!/usr/bin/php
<?php
	if ($argc == 2)
	{	
		$biarray = explode(" ", $argv[1]);
		$filtered = array_filter($biarray);
		$indexed = array_values($filtered);
		$n = count($indexed);
		$i = 0;
		while ($i < $n)
		{
			echo "$indexed[$i]";
			$i++;
			if ($i < $n)
				echo " ";
		}
		echo "\n";
	}
?>
