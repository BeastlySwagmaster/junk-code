
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
		echo "Created a new card named " . $title . " who is a " . $type . " type and has " . $health . " health <br>";
	}

	public function getTitle()
	{
		return $this->title;
	}
}

?>
