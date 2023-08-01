<?php
function selectFirstFiveWords($sentence) {
    $words = explode(' ', $sentence);
    $firstFiveWords = array_slice($words, 0, 5);
    return implode(' ', $firstFiveWords);
}

// Example usage:
$sentence = 'The quick brown fox jumps over the lazy dog';
$selectedWords = selectFirstFiveWords($sentence);
echo "Original Sentence: " . $sentence . PHP_EOL;
echo "Expected Output: " . $selectedWords . PHP_EOL;
?>
