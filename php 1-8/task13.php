<?php

function get_lowest_non_zero_integer($array) {
    $lowest = PHP_INT_MAX;

    foreach ($array as $value) {
        if ($value != 0 && $value < $lowest) {
            $lowest = $value;
        }
    }

    return $lowest;
}

// Sample Input
$array1 = array(2, 0, 10, 12, 6);

// Get the lowest non-zero integer
$lowest_integer = get_lowest_non_zero_integer($array1);

// Output the result
echo $lowest_integer;

?>
