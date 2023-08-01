<?php
function removeSpecialCharacters($originalString) {
    // Define the regular expression pattern to match special characters
    $pattern = '/[^0-9 ]/';

    // Replace the special characters with an empty string
    return preg_replace($pattern, '', $originalString);
}

// Example usage:
$originalString = '\"\1+2/3*2:2-3/4*3';
$newString = removeSpecialCharacters($originalString);
echo "Original String: " . $originalString . PHP_EOL;
echo "Expected Output: " . $newString . PHP_EOL;
?>
