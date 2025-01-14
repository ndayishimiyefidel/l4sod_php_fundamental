<?php
//Arrays in php 
//type of array
// $myAr = array('apple', 'banana');
$products = array('shoes', 'pillover', 'T-shirt');
//echo $products[1]; //pillover


//change array value
$products[1] = 'shirt';
//var_dump($products);
//
//for each loop
foreach ($products as $product) {
    //  echo $product . '<br>';
}
$sum = 0;
$scoreMarks = [90, 85, 56, 80, 50, 75];
foreach ($scoreMarks as $score) {
    $sum += $score; //sum=sum+score
}

//average calculation
$average = $sum / count($scoreMarks);
echo "average: $average";


//associative array or key value based arrays

$person = array('username' => 'John', 'age' => 30, 'gender' => 'male', 'is_active' => true, 'password' => '123456');
// echo $person['username']; // John
// echo $person['age']; // 30
// echo $person['gender']; // male
// echo $person['is_active']; // true
// echo $person['password']; // 123456
//$person['username'] = 'Peter';
// echo $person['username']; // peter
//display all arrays elements
foreach ($person as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

$books = array('bookname' => 'Javascript', 'booktype' => 'ICT', 'author' => 'Martin', 'publisher' => 'xyz', "published_Date" => '1998');
$books['bookname'] = 'php';
foreach ($books as $key => $value) {
    // echo $key . ': ' . $value . '<br>';
}

$cars = array(
    array("Volvo", 22, 18), //Volvo 22 18
    array("BMW", 15, 13), //BMW 15 13
    array("Saab", 5, 2), //Saab 5 2
    array("Land Rover", 17, 15) //Land Rover 17 15
);
// var_dump($cars);
// echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
// echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
// echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
// echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
$color = "red";
switch ($color) {
    case "blue":
        echo "Blue!";
        break;
    case "red":
        echo "Red!";
        break;
    default:
        echo "No match!";
}