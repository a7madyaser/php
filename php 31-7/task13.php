<?php
function removePartOfString($originalString, $substringToRemove) {
    return str_replace($substringToRemove, '', $originalString);
}

// Example usage:
$originalString = 'The quick brown fox jumps over the lazy dog';
$substringToRemove = 'fox';
$newString = removePartOfString($originalString, $substringToRemove);
echo "Original String: " . $originalString . PHP_EOL;
echo "Remove: '" . $substringToRemove . "'" . PHP_EOL;
echo "Expected Output: " . $newString . PHP_EOL;
?>
