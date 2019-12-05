<?php
	function ft_split($str)
	{
		$biarray = explode(" ", $str);
		$filtered = array_filter($biarray);
		$indexed = array_values($filtered);
		sort($indexed);
		return ($indexed);
	}
?>
