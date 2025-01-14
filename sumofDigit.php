<?php
$num = 23;
$sumOfDigit = 0;
$temp = $num;
while ($num > 0) {
    $r = $num % 10; //23%10=3
    $sumOfDigit += $r; //sum=0+3=3
    $num = (int)($num / 10); //n=23/10=2
}

echo "The sum of the digits of the number $temp is $sumOfDigit."; //2+3=5


//fibanacci series
function fibanacci($num)
{
    $a = 0;
    $b = 1;
    for ($i = 1; $i <= $num; $i++) {
        echo $a . "<br>";
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}
echo "The fibanacci series:<br>";
echo fibanacci(10);//call function