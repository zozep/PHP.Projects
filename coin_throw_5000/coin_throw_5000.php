<?php
/*
You're going to create a program that simulates throwing a coin 5,000 times. Your program should display how many times the head/tail appears.

Sample output should be like the following:

Starting the program
Attempt #1: Throwing a coin... It's a head! ... Got 1 head(s) so far and 0 tail(s) so far
Attempt #2: Throwing a coin... It's a head! ... Got 2 head(s) so far and 0 tail(s) so far 
Attempt #3: Throwing a coin... It's a tail! ... Got 2 head(s) so far and 1 tail(s) so far 
Attempt #4: Throwing a coin... It's a head! ... Got 3 head(s) so far and 1 tail(s) so far
..................................................................................................
Attempt #5000: Throwing a coin... It's a head! ... Got 2412 head(s) so far and 2588 tail(s) so far 
Ending the program - thank you!
*/

for($i = 1; $i <= 100; $i++){
	$numb = rand(50,100);
	echo "<h1>Your Score is: $numb.</h1><h2>Your Grade is: ";

	if($numb < 70){
		echo "D";
	}
	elseif($numb <=79){
		echo "C";
	}
	elseif($numb <=89){
		echo "B";
	}
	elseif($numb <= 100){
		echo "A";
	}
	
echo "</h2>";
$numb;
}

?> 
