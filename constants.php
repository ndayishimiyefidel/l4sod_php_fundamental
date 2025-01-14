<?php
//php constants:
define('BASEPATH', "https://www.php.net/");
//echo BASEPATH;
// echo Basepath//error undefined variable

define("PI", 3.14);
echo PI;

//echo "PI=" . PI;
//write php script to area and perimeter of circle.

function calculateCircleArea($radius)
{
    return PI * pow($radius, 2);
}

function calculateCirclePerimeter($radius)
{
    return 2 * PI * $radius;
}
//fucntion call
echo calculateCircleArea(5);
echo "<br>";
echo calculateCirclePerimeter(5);

echo "<br>";
//
$radius = 5;
$area = PI * $radius * $radius;
$perimter = 2 * PI * $radius;

echo "<br>Area: " . $area;
echo "<br>Perimeter: " . $perimter;


//php const keyword
const MESSAGE = "<br/>Hello const by JavaTpoint PHP";
echo MESSAGE;


//magic constants
echo "<br>" . __LINE__ . "<br/>"; //current line number of the file
echo "<br>" . __DIR__ . "<br/>"; //current directory path of the file
echo "<br>" . __FILE__ . "<br/>"; //current directory name +filename or simply full path to the file
echo "<br>" . __NAMESPACE__ . "<br/>";
