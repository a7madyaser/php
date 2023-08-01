<?php

function get_shortest_and_longest_length($words) {
    $shortest_length = PHP_INT_MAX;
    $longest_length = 0;

    foreach ($words as $word) {
        $length = strlen($word);
        if ($length < $shortest_length) {
            $shortest_length = $length;
        }
        if ($length > $longest_length) {
            $longest_length = $length;
        }
    }

    return array($shortest_length, $longest_length);
}

// Sample Input
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");

// Get the shortest and longest lengths
list($shortest_length, $longest_length) = get_shortest_and_longest_length($words);

// Output the result
echo "The shortest array length is $shortest_length. The longest array length is $longest_length.";

?>
