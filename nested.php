<?php
$i = 1;
while ($i <= 2) {
    $j = 1;
    while ($j <= 4) {
        echo "$i $j<br/>";
        $j++;
    }
    $i++;
}
//star
for ($i = 5; $i > 0; $i--) {
    for ($j = 5; $j >= $i; $j--) {
        echo $j;
    }
    echo "<br>";
}
