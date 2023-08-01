<?php

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Sort the associative array by keys in ascending order
ksort($fruits);

// Output the sorted array
foreach ($fruits as $key => $value) {
    echo "$key = $value" . PHP_EOL;
}

?>
