<?php
//Write a PHP script that generates the multiplication table for the number 5 using a for loop
$num = 5;
for ($i = 1; $i <= 10; $i++) {
    $result = $num * $i;
    //echo "$num x $i = $result <br />";
}
//13.write a php script to find the root of quadratic equation of form AX2+BX+C=0,

$a = 1;
$b = 5;
$c = 6;
if ($a != 0) {
    $delt = ($b ** 2) - (4 * $a * $c);
    if ($delt < 0) {
        echo "The equation has no real roots.";
    } elseif ($delt == 0) {
        $root = -$b / (2 * $a);
        echo "The equation has one real root: $root.";
    } else {
        $root1 = (-$b + sqrt($delt)) / (2 * $a);
        $root2 = (-$b - sqrt($delt)) / (2 * $a);
        echo "The equation has two real roots: $root1 and $root2.";
    }
} else {
    echo "$a should no be zero";
}
//Write a php script that checks if a given year is a leap year or not. checks if a year stored in a variable $year and then print whether it is a leap year or not. This program uses the rules for determining leap years: If the year is divisible by 4 and not divisible by 100, or If the year is divisible by 400. /5marks
$year = 2000;

if (($year % 4 == 0 && $year % 100 !== 0) || $year % 400 == 0) {
    echo "leap year";
} else {
    echo "not a leap year";
}
