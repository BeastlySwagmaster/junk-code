<?php

require_once 'Card.php';

class Deck 
{
	//deck will be an array of cards
	private $deck = array();
	//deck will have a size value
	private $size;
	//temporary placeholder value for maximum size of deck
	const MAX_SIZE = 20;
	
	public function addCard(Card $card)
	{
		//check to make sure that they don't already have too many cards before adding
		//to their deck
		if($deck->size<=$MAX_SIZE)
		{
			//add card to deck
			array_push($deck, $card);
		}
		else
		{
			echo "You already have a full deck.";
		}
	}
	
	public function shuffe()
	{
		shuffle($deck);
	}
	
	public function draw()
	{
		return array_pop($deck);
	}
	
	public function deleteCard(Card $card)
	{
		//delete the card from the deck
		$deck = array_diff($deck, [$card]);
	}
}


?>
