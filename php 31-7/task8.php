<?php
function replaceFirstWord($sentence, $newWord) {
    $words = explode(' ', $sentence);
    $words[0] = $newWord;
    return implode(' ', $words);
}

// Example usage:
$sentence = 'That new trainee is so genius.';
$newWord = 'Our';
echo "Original Sentence: " . $sentence . PHP_EOL;
echo "New Word: " . $newWord . PHP_EOL;
echo "Result: " . replaceFirstWord($sentence, $newWord) . PHP_EOL;
?>
