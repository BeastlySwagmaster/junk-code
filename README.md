We are curently able to add cards to a deck and shuffle it.  The problem is that we can't get it to go through the database; it doesnt connect properly so that's problem number 1 right now.  In order to test this, open the command line, navigate to the folder that contains these pp files, and then activate the server.  Go to the url loacalhost:8000/Game.php to autofill the deck with garbage and shuffle it.  

Most recently I removed the testcase file and hardcoded the deck population into the Deck class.  This allowed me to debug a great deal and trace the program all the way to the end.

to do list:
    - Find out how to access the database with php and populate the decks with cards that way
    
