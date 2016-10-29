<?php
require_once 'Player.php';
require_once 'Card.php';
require_once 'Deck.php';

class Game
{
	private $player2;
	private $player1;
	private $gameOver;
	private $turnCount;
	
	public function __construct()
	{
		//$this->player1 = new Player("Dan");
		//$this->player2 = new Player("Jeremy");
		//echo "This will be a match between ". $this->player1->getName() . " and " . $this->player2->getName() . "<br>";
		//$this->turnCount = 0;
		//$this->gameOver = False;
		//$this->drawBackground();
		//$this->mulligan();
		//$this->runGame();
	}	
	
	//Right now it just draws cards.  We can implement a mulligan later.
	public function mulligan()
	{
		for($counter1 = 1; $counter1 < 6; $counter1++)
		{
			$this->player1->drawCard();
		}

		for($counter2 = 1; $counter2 < 6; $counter2++)
		{
			$this->player2->drawCard();
		}
	}
	
	public function drawBackground()
	{
		//Randomly select a background here
	}
	
	public function runGame()
	{
		//This loop increments the turn counter, decides who gets to play next, and decides when the game is over.
		do
		{
			$this->turnCount ++;
			if($this->turnCount % 2 == 1)
			{
				playTurn($this->player1);
			}
			else if ($this->turnCount % 2 == 0)
			{
				playTurn($this->player2);
			}			
		} while($this->gameOver == True);
		
		updateRecord();
	}
	
	public function playTurn(Player $currentPlayer)
	{
		$currentPlayer->drawCard();
		
		$currentPlayer->taunt();
	}
	
	//Honestly I forget what update record was supposed to do 
	public function updateRecord()
	{
		
	}
}

?>