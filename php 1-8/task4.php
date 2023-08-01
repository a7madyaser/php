<?php

function insert_item_at_position($array, $position, $new_item) {
    // Insert the new item at the specified position
    array_splice($array, $position - 1, 0, $new_item);
    return $array;
}

// Sample Input
$array = [1, 2, 3, 4, 5];
$location = 4;
$new_item = '$';

// Insert the new item at the specified position
$result_array = insert_item_at_position($array, $location, $new_item);

// Output the result
echo implode(' ', $result_array);

?>
