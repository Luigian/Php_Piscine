<?php
Class UnholyFactory
{
	private $army = [];
	
	public function absorb($ch)
	{
		
		if ($ch instanceof Fighter)
		{
			if (isset($this->army[$ch->getName()]))
			{
				print("(Factory already absorbed a fighter of type ");
				print($ch->getName());
				print(")" . PHP_EOL);
			}
			else
			{
				$this->army[$ch->getName()] = $ch;
				print("(Factory absorbed a fighter of type ");
				print($ch->getName());
				print(")" . PHP_EOL);
			}
		}
		else
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}

	public function fabricate($ch)
	{
		if (isset($this->army[$ch]))
		{
			print("(Factory fabricates a fighter of type ");
			print($ch);
			print(")" . PHP_EOL);
			return $this->army[$ch];
		}
		else
		{	
			print("(Factory hasn't absorbed any fighter of type ");
			print($ch);
			print(")" . PHP_EOL);
			return false;
		}
	}
}
?>
