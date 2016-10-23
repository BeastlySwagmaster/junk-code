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
	}	
	
	public function incrementTurn()
	{
		do
		{
			$turnCount += 1;

			if($turnCount % 2 == 0)
			{
				playTurn($player2);
			}
			else if ($turnCount % 2 == 1)
			{
				playTurn($player1);
			}			
			
		} while($gameOver != True);
	}
	
	public function playTurn(Player $currentPlayer)
	{
		$currentPlayer.deck.draw();
		
		
	}
}

?>
<?php 
$game = new Game();
$charizard = new Card(100, "scary dagron", "Charizard", "fire");

?>
