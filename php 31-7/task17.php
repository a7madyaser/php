<?php
function removeCommas($numericString) {
    return str_replace(',', '', $numericString);
}

// Example usage:
$numericString = '2,543.12';
$newString = removeCommas($numericString);
echo "Original Numeric String: " . $numericString . PHP_EOL;
echo "Expected Output: " . $newString . PHP_EOL;
?>
