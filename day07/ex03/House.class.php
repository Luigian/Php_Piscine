<?php
abstract Class House
{
	public function introduce()
	{
		print ("House ");
		print ($this->getHouseName());
		print (" of ");
		print ($this->getHouseSeat());
		print (' : "');
		print ($this->getHouseMotto());
		print ('"' . PHP_EOL);
	}
	abstract function getHouseName();
	abstract function getHouseMotto();
	abstract function getHouseSeat();
}
?>
