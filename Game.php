<?php
require_once 'Player.php';
require_once 'Card.php';
require_once 'Deck.php';

class Game
{
	public function __construct()
	{
		$player1 = new Player("Dan");
		$player2 = new Player("Jeremy");
		echo "This will be a match between ". $player1->getName() . " and " . $player2->getName() . "<br>";
		$turnCount = 0;
		$gameOver = False;
		drawBackground();
		mulligan();
		runGame();
	}	
	
	//Right now it just draws cards.  We can implement a mulligan later.
	public function mulligan()
	{
		for($counter1 = 1; $counter1 < 6; $counter1++)
		{
			$player1.drawCard();
		}
		
		for($counter2 = 1; $counter2 < 6; $counter2++)
		{
			$player2.drawCard()
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
			$turnCount ++;
			if($turnCount % 2 == 1)
			{
				playTurn($player1);
			}
			else if ($turnCount % 2 == 0)
			{
				playTurn($player2);
			}			
		} while($gameOver != True);
		
		updateRecord();
	}
	
	public function playTurn(Player $currentPlayer)
	{
		$currentPlayer.drawCard();
		
		$currentPlayer.taunt();
	}
	
	//Honestly I forget what update record was supposed to do 
	public function updateRecord()
	{
		
	}
}

?>
<?php 
$game = new Game();
$charizard = new Card(100, "scary dagron", "Charizard", "fire");

?>
