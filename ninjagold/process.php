<?php

if ($_POST['building'] =="farm") {
		$random_gold = rand(10,20);
	}

	if ($_POST['building'] == "cave") {
			$random_gold = rand(5,10);
		}

	if ($_POST['building'] == "house") {
			$random_gold = rand(2,5);
		}i
	if ($_POST['building'] == "casino") {
			$random_gold = rand(5,10);
		}

	if ($random_gold < 0)c
	}
	else
	{
		$message = "you entered a ". $building . "and lost " .
		$random_gold. "gold (". date("F dS Y h:i: a", time()).")";
	{
		$message = "you entered a ". $building . "and lost " .
		$random_gold. "gold (". date("F dS Y h:i: a", time()).")";
	}

		var_dump($message);
		var_dump($random_gold)
?>