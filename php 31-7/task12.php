<?php
function removeLeadingZeroes($number) {
    return ltrim($number, '0');
}

// Example usage:
$originalNumber = '0000657022.24';
$processedNumber = removeLeadingZeroes($originalNumber);
echo "Original Number: " . $originalNumber . PHP_EOL;
echo "Expected Output: " . $processedNumber . PHP_EOL;
?>
