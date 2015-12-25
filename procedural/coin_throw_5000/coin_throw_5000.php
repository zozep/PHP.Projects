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
function coin_throw(){
	$heads= 0;
	$tails= 0;

	echo "<h1>Starting the program</h1>";

	for($i= 1; $i < 5000; $i++){
	
	$score = rand(0, 1);
		
		if($score == 0){	
			$heads = $heads+1;
			echo "<div>Attempt #{$i}: Throwing a coin... It's a head!... Got {$heads} head(s) so far and {$tails} tail(s) so far</div>";}	
		
		elseif($score == 1){
			$tails = $tails+1;
			echo "<div>Attempt #{$i}: Throwing a coin... It's a tail!... Got {$heads} head(s) so far and {$tails} tail(s) so far</div>";}
		}

echo "<div>Attempt #$i: Throwing a coin... It's a '$heads || $tails'... Got {$heads} heads(s) so far and {$tails} tail(s) so far <h2>Ending the program - thank you!</h2></div>";		
}	
coin_throw()
?> 