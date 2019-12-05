<?php

	function ft_is_sort($argv)
	{
		if (($n = count($argv)) == 1)
			return (1);
		$tmp = $argv;
		sort($tmp);
		$i = 0;
		while ($i < $n)
		{
			if (strcmp($tmp[$i], $argv[$i]))
				return (0);
			$i++;
		}
		return (1);
	}

?>
