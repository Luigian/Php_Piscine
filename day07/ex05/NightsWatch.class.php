<?php
Class NightsWatch
{
	private $army = [];
	
	public function recruit($ch)
	{
		array_push($this->army, $ch);
	}
	public function fight()
	{
		foreach ($this->army as $ch)
		{
			if ($ch instanceof IFighter)
				$ch->fight();
		}
	}	
}
?>
