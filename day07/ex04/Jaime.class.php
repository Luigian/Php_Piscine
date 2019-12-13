<?php
Class Jaime extends Lannister
{
	public function sleepWith($ch)
	{
		if ($ch instanceof Tyrion)
			print("Not even if I'm drunk !" . PHP_EOL);
		else if ($ch instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		else if ($ch instanceof Sansa)
			print("Let's do this." . PHP_EOL);
	}	
}
?>
