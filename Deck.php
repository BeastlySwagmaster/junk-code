<?php

require_once 'Card.php';

define('MAX_SIZE', '20');

class Deck 
{
		//deck will be an array of cards
	private $myDeck = array();
		//deck will have a size value
	private $size;
		//temporary placeholder value for maximum size of deck
	//const MAX_SIZE = 20;
	private $database;
	private $currSize;
	
	public function __construct()
	{
		$this->loadDB();
		$this->deckShuffle();
	}
	
	public function loadDB()
	{
		
		/*$charizard = new Card(100, "scary dagron", "Charizard", "fire");
		$penisMonster = new Card(100,"giant penis", "penis monster", "earth");
		$cumDumpster = new Card(100, "cum dumpster", "cum dumpster", "poison");
		$this->addCard($charizard);
		$this->addCard($penisMonster);
		$this->addCard($cumDumpster);
		*/

		$count = 1;
		$full = False;
		
		$database = new mysqli('localhost:3306', 'admin', 'secret', 'onslaught');

		if(!$database)
		{
			die("bad");
		}
		// echo "good";
		
		//This loop makes the cards.  Might have been bigger that I planned. Can make a new function.
		do
		{
				//We update the database query each time so we can grab a different card.  
				//This could be wrong because I didn't really follow how the database worked.
			$query = "SELECT * FROM Card WHERE cardid = $count";
			
				//If the result can't be found, explode.
			if(!( $result = mysqli_query( $database, "$query" )))
			{
				die("Can't you do anything right?");
			}
			
			//I believe this will give a string of the whole table row.  We need to parse it.
			//We'll probably need some testing to figure out exactly what's going on here because I'm fuzzy on it.
			while ($row = $result->fetch_assoc()) {
				
				$health = $row['defensePoints'];
				$image = $row['picture'];
				$title = $row['name'];
				$type = '"Stupid as Fuck!"';

			}
			
			$card = new Card($health, $image, $title, $type);
			$full = $this->addCard($card);
		
			$count++;
		}while($full == False);
		mysqli_close( $database );
		
	}
	
	//This function returns a booleans telling if it worked
	public function addCard(Card $card)
	{
		array_push($this->myDeck, $card);
		$this->currSize = count($this->myDeck);
	
		//Check if this is the last card
		if($this->currSize == MAX_SIZE)
		{
			return True;
		}
		else
		{
			return False;
		}
	}
	
	public function deckShuffle()
	{
		shuffle($this->myDeck);
	}
	
	public function draw()
	{
		return array_pop($this->myDeck);
	}
	
	public function deleteCard(Card $card)
	{
		//delete the card from the deck
		$this->myDeck = array_diff($deck, [$card]);
	}
}


?>
