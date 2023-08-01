<?php
function insertStringAtPosition($originalString, $insertString, $position) {
    return substr_replace($originalString, $insertString, $position, 0);
}

function getFirstWord($sentence) {
    $words = explode(' ', $sentence);
    return $words[0];
}

// Example usage for inserting a string at a specified position:
$originalString = 'The brown fox';
$insertString = 'quick';
$position = 4;
$newString = insertStringAtPosition($originalString, $insertString, $position);
echo "Original String: " . $originalString . PHP_EOL;
echo "Insert: '" . $insertString . "' between position " . $position . PHP_EOL;
echo "Expected Output: " . $newString . PHP_EOL;

// Example usage for getting the first word of a sentence:
$sentence = 'The quick brown fox';
$firstWord = getFirstWord($sentence);
echo "Original String: " . $sentence . PHP_EOL;
echo "Expected Output: " . $firstWord . PHP_EOL;
?>
