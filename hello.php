<?php

//single line comment


echo "hello, welcome to php programming";

//echo "Php is funny! ";

/* 
multline comment

*/

/*echo "Php is funny! ";
echo "Php is funny! ";
echo "Php is funny! ";
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FUNDAMENTAL</title>
</head>

<body>
    <?php
    //every line in php must be ending with semicolon (;)



    ?>
</body>

</html>

<?php
//variable declaration
$firtName = "Kevin";
$lastName = "MUGABO";

// echo "My first name is " . $firtName . " " . "my last name is " . $lastName;


//php variable

$sTr = "hello"; //string variable
$myNumber = 10; //number variable
$myFloat = 49.5; //float variable

// echo "<br>$sTr <br/>";
// echo "$myNumber <br/>";
// echo "$myFloat <br/>";

//length=30
//width 50


//php operator

$length = 45;
$width = 50;

$area = $length * $width;


// echo "Area: $area";

$num1 = 0;
$num2 = 0;
for ($k = 0; $k < 5; $k++) {
    $num1 += 50; //num1=num1+50
    //i=0,num1=50
    //i=1,num1=100
    //i=2,num1=150
    //i=3,num1=200
    //i=4,num1=250
    $num2 += 15; //num2=num2+15

}
echo "At the end of the of the loop Num1=$num1 and Num2=$num2";
// $result = $num1 + $num2 * 2;
// echo "Result is: " . $result;

?>