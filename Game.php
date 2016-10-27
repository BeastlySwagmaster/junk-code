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
		
		//Handle mulligans here before starting the game?
		
		runGame();
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
		
		//Lots of other stuff will be in here.
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
