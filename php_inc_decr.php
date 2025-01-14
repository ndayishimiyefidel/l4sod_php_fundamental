<?php

$x = 15;
$y = 10;
$result = ++$x + $y++; //16+10

echo $x; //16
echo $y; //11
echo $result; //26


$result1 = $x++ + ++$y; //16+12
echo $x; //17
echo $y; //12
echo $result1; //28
//decrement
$x1 = 15;
$y1 = 10;
$result2 = --$x1 + $y1--; //14+10

echo $x1; //14
echo $y1; //9
echo $result2; //24

$result4 = ++$x1 + ++$y; //15+10
echo $x1; //15
echo $y1; //10
echo $result4; //25
$result5 = $x1++ - ++$y; //15-11

echo $x1; //16
echo $y1; //11

echo $result5; //4

echo "Result is " . " " . $result5;
