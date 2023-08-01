<?php

function convert_strings_to_uppercase($array) {
    return array_map('strtoupper', $array);
}

// Sample Input
$colors = array("red", "blue", "white", "yellow");

// Convert strings to uppercase
$uppercase_colors = convert_strings_to_uppercase($colors);

// Output the result
print_r($uppercase_colors);

?>
