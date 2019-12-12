<?php
Class Color
{
	public $red;
	public $green;
	public $blue;
	static $verbose = false;

	public function __construct(array $kwargs)
	{
		if (isset($kwargs["rgb"]))
		{
			$rgb = intval($kwargs["rgb"]);
			$this->red = $rgb / 65281 % 256;
			$this->green= $rgb / 256 % 256;
			$this->blue = $rgb % 256;
		}
		else if (isset($kwargs["red"]) && isset($kwargs["green"]) && isset($kwargs["blue"]))
		{
			$this->red = intval($kwargs["red"]);
			$this->green = intval($kwargs["green"]);
			$this->blue = intval($kwargs["blue"]);
		}
		if (self::$verbose)
			echo $this->__toString() . " constructed." . PHP_EOL;
	}

	function __destruct()
	{
		if (self::$verbose)
			echo $this->__toString() . " destructed." . PHP_EOL;
	}

	public function __toString()
	{
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
	}

	public function add($col)
	{
		return (new Color(array("red" => $this->red + $col->red, "green" => $this->green + $col->green, "blue" => $this->blue + $col->blue)));
	}

	public function sub($col)
	{
		return (new Color(array("red" => $this->red - $col->red, "green" => $this->green - $col->green, "blue" => $this->blue - $col->blue)));
	}

	public function mult($fact)
	{
		return (new Color(array("red" => $this->red * $fact, "green" => $this->green * $fact, "blue" => $this->blue * $fact)));
	}

	public static function doc()
	{
		if ($str = file_get_contents("Color.doc.txt"))
			echo "$str" . PHP_EOL;
		else
			echo "Error: .doc file doesn't exist.\n";
	}
}
?>
