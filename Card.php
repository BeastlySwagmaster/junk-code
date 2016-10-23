
<?php

class Card 
{
	private $health;
	private $image;
	private $type;
	private $title;
	public function __construct($health,$image, $title, $type)
	{
		$this->health = $health;
		$this->image = $image;
		$this->title = $title;
		$this->type = $type;
		print "Created a new card named " . $title . " who is a " . $type . " type and has " . $health . " health <br>";
	}
	public function setHealth($health)
	{
		$this->health = $health;
	}
	public function getHealth()
	{
		return $this->health;
	}
	public function setImage($image)
	{
		$this->image = $image;
	}
	public function getImage()
	{
		return $this->image;
	}
	public function setName($title)
	{
		$this->name = $title;
	}
	public function getName()
	{
		return $this->name;
	}
	
	
	
}
?>