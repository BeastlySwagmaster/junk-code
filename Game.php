<?php
require_once 'Player.php';
require_once 'Card.php';
require_once 'Deck.php';

class Game
{
	public $game;
	public $charizard;
	
	public function __construct()
	{
		$player1 = new Player("Dan");
		$player2 = new Player("Jeremy");
		echo "This will be a match between ". $player1->getName() . " and " . $player2->getName() . "<br>";
	}
	
	
}



?>
<?php 
$game = new Game();
$charizard = new Card(100, "scary dagron", "Charizard", "fire");

?>