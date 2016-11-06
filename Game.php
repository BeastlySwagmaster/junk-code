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
	private $datePlayed;
	
	public function __construct()
	{
		$this->player1 = new Player("Dan");
		$this->player2 = new Player("Jeremy");
		echo "This will be a match between ". $this->player1->getName() . " and " . $this->player2->getName() . "<br>";
		$this->turnCount = 0;
		$this->gameOver = False;
		$this->drawBackground();
		$this->mulligan();
		$this->runGame();
	}	
	
	//Right now it just draws cards.  We can implement a mulligan later.
	public function mulligan()
	{
		for($counter1 = 0; $counter1 < 3; $counter1++)
		{
			$this->player1->drawCard();
		}

		for($counter2 = 0; $counter2 < 3; $counter2++)
		{
			$this->player2->drawCard();
		}
	}
	
	public function drawBackground()
	{
		//Randomly select a background here
		return 1;
	}
	
	public function runGame()
	{
		//This loop increments the turn counter, decides who gets to play next, and decides when the game is over.
		do
		{
			$this->turnCount ++;
			if($this->turnCount % 2 == 1)
			{
				$this->playTurn($this->player1);
			}
			else if ($this->turnCount % 2 == 0)
			{
				$this->playTurn($this->player2);
				break;
			}			
		} while($this->gameOver == False);
		$this->updateRecord($this->player1);
		$this->updateRecord($this->player2);
		
	}
	
	public function playTurn(Player $currentPlayer)
	{
		//$currentPlayer->drawCard();
		
		$currentPlayer->taunt();
	}
	
	//Honestly I forget what update record was supposed to do 
	public function updateRecord($player)
	{
		echo "We made it to the end!<br>";
	}
}

?>
<?php 
$game = new Game();
?>
