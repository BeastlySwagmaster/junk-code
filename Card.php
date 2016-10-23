
<?php

class Card 
{
	private $type;
	private $title;
	private $ID;
	public function __construct($health,$image, $title, $type)
	{
		$this->title = $title;
		$this->type = $type;
		print "Created a new card named " . $title . " who is a " . $type . " type and has " . $health . " health <br>";
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
