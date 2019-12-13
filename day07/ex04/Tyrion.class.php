<?php
Class Tyrion extends Lannister
{
	public function sleepWith($ch)
	{
		if ($ch instanceof Jaime || $ch instanceof Cersei)
			print("Not even if I'm drunk !" . PHP_EOL);		
		else if ($ch instanceof Sansa)
			print("Let's do this." . PHP_EOL);		
	}
}
?>
