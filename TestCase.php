<?php 
require_once 'Game.php';

$game = new Game();
$charizard = new Card(100, "scary dagron", "Charizard", "fire");
$penisMonster = new Card(100,"giant penis", "penis monster", "earth");
$cumDumpster = new Card(100, "cum dumpster", "cum dumpster", "poison");
$deck = new Deck();
$deck->addCard($charizard);
$deck->addCard($penisMonster);
$deck->addCard($cumDumpster);
$deck->deckShuffle();
?>