<?php

function generate_unique_random_numbers($min, $max, $count) {
    if ($max - $min + 1 < $count) {
        return false; // Unable to generate unique random numbers within the range
    }

    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $count);
}

// Sample Input
$min = 11;
$max = 20;
$count = 10;

// Generate unique random numbers
$random_numbers = generate_unique_random_numbers($min, $max, $count);

// Output the result
echo implode(' ', $random_numbers);

?>
