<?php
function formatNumericStringToTime($numericString) {
    if (strlen($numericString) !== 6) {
        return "Invalid input. The numeric string should be exactly 6 characters long.";
    }

    $hour = substr($numericString, 0, 2);
    $minute = substr($numericString, 2, 2);
    $second = substr($numericString, 4, 2);

    return "$hour:$minute:$second";
}

// Example usage:
$numericString = '085119';
echo "Numeric String: " . $numericString . PHP_EOL;
echo "Formatted Time: " . formatNumericStringToTime($numericString) . PHP_EOL;
?>
