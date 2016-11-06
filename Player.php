<?php

require_once 'Deck.php';
require_once 'Card.php';

class Player 
{
	//variable for their deck of cards
	private $playerDeck;
	//variable for their name. Derp.
	private $name;
	//Health
	private $health;
	//variable for number of cards active in hand at a given time
	//necessary for determining win conditions
	private $activeCards;
	//need an array of cards that the player currently has
	private $cardsInHand = array();
	
	//constructor for the class
	public function __construct($name)
	{
		$this->name = $name;
		$this->taunt();
		$this->setActiveCards(0);
		$this->playerDeck = new Deck();
	}
	
	public function taunt()
	{
		switch (rand(1,5)) {
			case 1:
				echo "Git gud n00b<br>";
				break;
			case 2:
				echo "Totes banged ur mom<br>";
				break;
			case 3:
				echo "Your shirt is red!<br>";
				break;
			case 4:
				echo "You are a loser.<br>";
				break;
			case 5:
				echo "Your famiry vewy disappoint!<br>";
				break;
			default:
				echo "Can't think of anything witty...<br>";
		}
	}
	
	//function for drawing cards
	public function drawCard()
	{
		//return a random card from their deck
		$this->addToHand($this->playerDeck->draw());
	}
	
	//in case player decides to keep card that is drawn
	public function addToHand(Card $card)
	{
		//add the selected card to the player's hand
		array_push($this->cardsInHand, $card);
		$this->incActiveCards();
	}
	
	//Ends turn
	public function endTurn()
	{
		return True;
	}
	
	public function Surrender()
	{
		return True;
	}
	//setters and getters for each of them
	public function setActiveCards($number)
	{
		$this->activeCards = $number;
	}
	
	public function incActiveCards()
	{
		$this->activeCards++;
	}
	
	public function decActiveCards()
	{
		$this->activeCards--;
	}
	
	public function getActiveCards()
	{
		return $this->activeCards;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setPlayerDeck(Deck $deck)
	{
		$this->playerDeck = $deck;
	}
	
	public function getPlayerDeck()
	{
		return $this->playerDeck;
	}
	
}
?>
