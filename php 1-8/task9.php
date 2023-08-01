<?php

function convert_strings_to_lowercase($array) {
    return array_map('strtolower', $array);
}

// Sample Input
$colors = array("RED", "BLUE", "WHITE", "YELLOW");

// Convert strings to lowercase
$lowercase_colors = convert_strings_to_lowercase($colors);

// Output the result
print_r($lowercase_colors);

?>
