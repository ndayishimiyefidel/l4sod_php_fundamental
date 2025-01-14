<?php

//String function
$str = "PHP built-in functions";
// echo strlen($str); //length of string
// echo "<br/>" . strtolower($str); //change string to lower case
// echo "<br/>" . strtoupper($str); //
// echo "<br/>" . str_replace("Hello", "hello", "hello world"); //
// echo str_replace("World", "Mugisha", "Hello World");
//echo str_replace_all();
$array = array("apple", "banana", "orange");
// echo implode(", ", $array);

//php date
$date = date("d-m-Y H:i:s:a"); //display the current date

echo "<br/> current time:" . $date; //
$timestamp = mktime(12, 0, 0, 10, 15, 2024); //15/10/2024 12:00:00

echo "<br> Timestamp:" . $timestamp; //converted timestamp

echo "<br/>Time stamp is:" . date("Y-m-d H:i:s:a", $timestamp);
echo "<br>";

$time = time();
echo "current time:" . $time; //1729602444
echo "<br>";
echo date("Y-m-d H:i:s:a", $time);
//string to time:
echo "<br>";
$timestamp1 = strtotime("yesterday");
echo date("Y-m-d", $timestamp1);
