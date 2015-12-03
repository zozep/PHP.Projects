<?php
/*
Use a rand() function to generate a random number between 50-100.
Store the value returned from the above random function to a variable called $score
Display the following grade depending on the score:
Score below 70: display the score in h1 tag and display in h2 tag their grade: D
Score between 70-80: display the score in h1 tag and display in h2 tag their grade: C
Score between 80-90: display the score in h1 tag and display in h2 tag their grade: B; if someone got 80, give them a B
Score between 90-100: display the score in h1 tag and display in h2 tag their grade: A; if someone got 90, give them an A
For example, the output of your code would be something like below:

Your Score: 81/100
Your grade is B.
IMPORTANT: After you make this work, use a for loop to generate your score/grade 100 times.
 In other words, after you run your PHP script, it should display the score and grade 100 times.
*/

$number = rand(50,100);
echo $number;



?>