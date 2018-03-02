<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	$answer1 = $_POST["Question1"];
	$answer2 = $_POST["Question2"];
	$answer3 = $_POST["Question3"];
	$answer4 = $_POST["Question4"];
	$answer5 = $_POST["Question5"];
	
	$correct = 0;

	echo "<p>Question 1: Which button cooresponds to the letter \"A\"?</p>";
	echo "You Answered: " . $answer1 . "<br>";
	echo "Correct Answer: A";
	
	echo "<p>Question 2: Which button cooresponds to the letter \"B\"?</p>";
	echo "You Answered: " . $answer2 . "<br>";
	echo "Correct Answer: B";
	
	echo "<p>Question 3: Which button cooresponds to the letter \"C\"?</p>";
	echo "You Answered: " . $answer3 . "<br>";
	echo "Correct Answer: C";
	
	echo "<p>Question 4: Which button cooresponds to the letter \"D\"?</p>";
	echo "You Answered: " . $answer4 . "<br>";
	echo "Correct Answer: D";
	
	echo "<p>Question 5: Which button cooresponds to the letter \"Z\"?</p>";
	echo "You Answered: " . $answer5 . "<br>";
	echo "Correct Answer: Z<br><br>";
	
	if($answer1 == "A")
	{
		$correct++;
	}
	if($answer2 == "B")
	{
		$correct++;
	}
	if($answer3 == "C")
	{
		$correct++;
	}
	if($answer4 == "D")
	{
		$correct++;
	}
	if($answer5 == "Z")
	{
		$correct++;
	}
	
	echo "<p>You answered " . $correct . " out of 5 correct</p>";
	echo "<p>You got a " . (($correct/5)*100) . "%</p>";
	
?>
