<?php
$a = 10;
$b = 5;

echo "Before Swap :A=$a and B=$b</br>";
//swap
$temp = $a; //temp=10
$a = $b; //a=5
$b = $temp; //b=10
echo "After Swap :A=$a and B=$b \n";
echo "<br>";

for ($i = 1; $i < 20; $i++) {
    if ($i == 5) continue; //skip value
    if ($i == 10) break; //stop execution
    echo $i;
}
