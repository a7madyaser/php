<?php
function checkWordInSentence($sentence, $word) {
    // Convert both the sentence and the word to lowercase to perform a case-insensitive search
    $sentenceLowercase = strtolower($sentence);
    $wordLowercase = strtolower($word);

    if (strpos($sentenceLowercase, $wordLowercase) !== false) {
        return "Word Found!";
    } else {
        return "Word Not Found!";
    }
}

// Example usage:
$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';

echo "Sentence: " . $sentence . PHP_EOL;
echo "Word: " . $word . PHP_EOL;
echo checkWordInSentence($sentence, $word) . PHP_EOL;
?>
