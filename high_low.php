<?php


$randNum = rand (1, 100);
echo "A random number between 1 and 100 has been selected.\n";
do {
// prompts user to guess the number 
fwrite(STDOUT, 'Please try to guess (and enter) the number (between 1 and 100). ');

// Get the number from user 
$guessedNumber = trim (fgets(STDIN));


// if user's guess is less than the number, it outputs "HIGHER" 
if ($guessedNumber < $randNum) {
	echo "Nope, the number selected is HIGHER. Try again.\n";
}
// if user's guess is more than the number, it outputs "LOWER" 
	else if ($guessedNumber > $randNum) {
	echo "Nope, the number selected is LOWER. Try again.\n";
	}

} while ($guessedNumber != $randNum);

// if a user guesses the number, the game should declare "GOOD GUESS!" 
	
	echo "Yep, GOOD GUESS!\n";
	
exit (0);
