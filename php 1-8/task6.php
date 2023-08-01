<?php

function calculate_average_temperature($temperatures) {
    $sum = array_sum($temperatures);
    $count = count($temperatures);
    return $sum / $count;
}

function get_lowest_temperatures($temperatures, $count) {
    sort($temperatures);
    return array_slice($temperatures, 0, $count);
}

function get_highest_temperatures($temperatures, $count) {
    rsort($temperatures);
    return array_slice($temperatures, 0, $count);
}

// Sample Input
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

// Calculate the average temperature
$average_temperature = calculate_average_temperature($temperatures);

// Get the lowest temperatures
$lowest_temperatures = get_lowest_temperatures($temperatures, 5);

// Get the highest temperatures
$highest_temperatures = get_highest_temperatures($temperatures, 5);

// Output the results
echo "Average Temperature is: " . number_format($average_temperature, 1) . PHP_EOL;
echo "List of five lowest temperatures: " . implode(', ', $lowest_temperatures) . PHP_EOL;
echo "List of five highest temperatures: " . implode(', ', $highest_temperatures) . PHP_EOL;

?>
