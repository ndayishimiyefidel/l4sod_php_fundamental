<?php

//user defined function


//function is block of code that perform specific task in program.
//function declaration and definition
function greetings()
{
    //echo "Hello, welcome to php fuction!";
}

//function call
echo greetings();

//ex2:
function findSum()
{
    //function that does accept parameters
    $a = 5;
    $b = 10;
    echo "Sum is: " . ($a + $b);
}
//echo findSum();

//ex3:
function addNumber($a, $b)
{
    return $a + $b . "<br />";
}

//function call with arguments
// echo addNumber(10, 50);
// echo addNumber(5, 50);
// echo addNumber(8, 23);

//ex4:
function login($username, $password)
{
    //check if username and password are correct
    return "username=" . $username . "&password=" . $password;
}

//function call with arguments
//echo login("wivine", "12345");

//ex5:
function findProduct($x, $y)
{
    return $x * $y . "<br />";
}

//function call with arguments
// echo findProduct(5, 6);
// echo findProduct(15, 2);
// echo findProduct(5, 7);

//ex6:
function findcircumferenceArea($r)
{
    $c = 3.14 * 2 * $r;
    $area = 3.14 * $r * $r;
    return "Area=" . $area . "and circumference=" . $c;
}

//function call with arguments
// echo findCircumferenceArea(7);
// echo findCircumferenceArea(10);
// echo findCircumferenceArea(5);

//ex7:
function checkEvenOdd($num)
{
    if ($num % 2 == 0) {
        return "Number is even";
    } else {
        return "Number is odd";
    }
}
// echo checkEvenOdd(7);
// echo checkEvenOdd(10);


//exercise on fucntion 
//write php fuction that find factorial of any number.
//ex:5!=120
function factorial($num)
{
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }
    return "factorial of $num is" . $fact;
}
echo factorial(6);
//exer:
//
//write php function that calculate multiplication table of any number.

// write a ph function that check if a given is prime or not.
function isPrime($num)
{
    for ($k = 2; $k <= $num / 2; $k++) {
        if ($num % $k !== 0) {

            return true;
        }
    }
    return false;
};
echo "<br>";
echo isPrime(7);
if (isPrime(8) == true) {
    echo "Number is prime";
} else {
    echo "Number is not prime";
}
