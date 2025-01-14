<?php

// Open the file in read mode
$file = fopen("example.txt", "r");

if ($file) {
    echo "File opened successfully!";
    fclose($file); // Close the file
} else {
    echo "Failed to open the file.";
}
