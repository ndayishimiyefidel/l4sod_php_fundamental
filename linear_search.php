<?Php

$target = 'Kevin';

$student = ['Peter', 'John', 'James', 'Kevin', 'Kelvin'];
$isFound = false;
$position;
for ($i = 0; $i < 4; $i++) {
    if ($student[$i] == $target) {

        $isFound = true;
        $position = $i;
    }
}
if ($isFound) {
    echo "$target  at position " . $position;
} else {
    echo "Item is not found";
}