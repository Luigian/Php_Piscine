<?php
require_once "Color.class.php";

Class Vertex
{
	private $_x;
	private $_y;
	private $_z;
	private $_w = 1.0;
	private $_color;
	static $verbose = false;

	public function __construct(array $kwargs)
	{
		if (isset($kwargs["x"]) && isset($kwargs["y"]) && isset($kwargs["z"]))
		{
			$this->_x = $kwargs["x"];
			$this->_y = $kwargs["y"];
			$this->_z = $kwargs["z"];
		}
		if (isset($kwargs["w"]))
			$this->_w = $kwargs["w"];
		if (isset($kwargs["color"]))
			$this->_color = $kwargs["color"];
		else
			$this->_color = new Color(array("red" => 255, "green" => 255, "blue" => 255));
		if (self::$verbose)
			echo $this->__toString() . " constructed." . PHP_EOL;
	}

	public function __destruct()
	{
		if (self::$verbose)
			echo $this->__toString() . " destructed." . PHP_EOL;
	}

	public function __toString()
	{
		if (self::$verbose)
			return (sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, $this->_color )", $this->_x, $this->_y, $this->_z, $this->_w));
		else
			return (sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
	}
	
	public static function doc()
	{
		if ($str = file_get_contents("Vertex.doc.txt"))
			echo "$str" . PHP_EOL;
		else
			echo "Error: .doc file doesn't exist.\n";
	}

	public function getX()
	{
		return $this->_x;
	}	
	
	public function setX($x)
	{
		$this->_x = $x;
	}
	
	public function getY()
	{
		return $this->_y;
	}
	
	public function setY($y)
	{
		$this->_y = $y;
	}
	
	public function getZ()
	{
		return $this->_z;
	}
	
	public function setZ($z)
	{
		$this->_z = $z;
	}
	
	public function getW()
	{
		return $this->_w;
	}
	
	public function setW($w)
	{
		$this->_w = $w;
	}
	
	public function getColor()
	{
		return $this->_color;
	}
	
	public function setColor($color)
	{
		$this->_color = $color;
	}
}
?>
