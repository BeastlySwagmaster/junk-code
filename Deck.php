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
		$count = 1;
		$full = False;
		/*
		$database = new mysqli( 'localhost:8000', 'admin@localhost', 'secret', 'Onslaught');
		if(!$database)
		{
			die("you suck balls");
		}
		echo "you don't suck balls";
		
		try
		{
		
		//If you can't connect, explode. The localhost thing is going to have to change when we get a server.
		if ( !( $database = mysqli_connect( "localhost:8000", $_POST["admin@localhost"], $_POST["secret"], "Onslaught" ) ) )
		{
					die("The database couldn't connect.  Check the login info and the database itself.");
		}
		
		//This loop makes the cards.  Might have been bigger that I planned. Can make a new function.
		do
		{
				//We update the database query each time so we can grab a different card.  
				//This could be wrong because I didn't really follow how the database worked.
			$query = "Select * FROM Card where Card_ID = $count";
			
				//If the result can't be found, explode.
			if(!( $result = mysqli_query( $database, "$query" )))
			{
				die("Can't you do anything right?");
			}
			
			//I believe this will give a string of the whole table row.  We need to parse it.
			//We'll probably need some testing to figure out exactly what's going on here because I'm fuzzy on it.
			$info = mysqli_fetch_fields($result);
		//	$health = 
		//	$image = 
		//	$title = 
		//	$type = 
				
			$full = addCard($health, $image, $title, $type);
		
			$count++;
		}while($count < 20);
		mysqli_close( $database );
		
		}
		catch(Exception $e)
		{
			echo "shit's fucked up yo";
		}
		*/
	}
	
	//This function returns a booleans telling if it worked
	public function addCard(Card $card)
	{
		$this->currSize = count($this->myDeck);
	
		//check to make sure that they don't already have too many cards before adding to their deck
		if($this->currSize <= MAX_SIZE)
		{
			//add card to deck
			array_push($this->myDeck, $card);
			print" successfully added " . $card->getTitle() . " to the deck<br>";
			print "currSize is currently " . $this->currSize . ".<br>";
			$this->currSize = count($this->myDeck);
		}
		else
		{	//Return to boolean 'full' that the deck is full
			return True;
		}
	}
	
	public function deckShuffle()
	{
		//echo "cocks cocks huge cocks<br>";
		shuffle($this->myDeck);
		for($i = 0; $i < $this->currSize; $i++)
		{
			echo $i."<br>";
			print $this->myDeck[$i]->getTitle();
			print "<br>";
		}
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
