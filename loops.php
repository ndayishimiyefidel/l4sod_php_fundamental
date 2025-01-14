<?php

//loops in php
//1. for loop
//print number from 1 to 100
$sum = 0;
for ($i = 2; $i <= 100; $i++) {

    //echo $i . "<br>";
    $sum += $i; //$sum=$sum+$i;
}
echo "Sum= " . $sum . "<br>";


//while loop
/*
syntax of whole loop
while(condition){
//block of code
}
example:
*/
$i = 1;
while ($i <= 100) {
    echo $i . "<br>";
    $i++;
}
///do while loop
/*
syntax of do while loop
do{

}
while(condition)
*/

$i = 1;
do {
    //i=100
    $i++;
    echo $i . "<br>";
} while ($i <= 100);

//for each loop
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
