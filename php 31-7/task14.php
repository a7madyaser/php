<?php
function removeTrailingDashes($originalString) {
    return rtrim($originalString, '-');
}

// Example usage:
$originalString = 'The quick brown fox jumps over the lazy dog---';
$newString = removeTrailingDashes($originalString);
echo "Original String: " . $originalString . PHP_EOL;
echo "Expected Output: " . $newString . PHP_EOL;
?>
