<?php
function convertToUppercase($str) {
    return strtoupper($str);
}

function convertToLowercase($str) {
    return strtolower($str);
}

function firstLetterUppercase($str) {
    return ucfirst($str);
}

function firstLetterOfEachWordCapitalized($str) {
    return ucwords($str);
}

// Example usage:
$enteredString = "hello, world!";
echo "Original String: " . $enteredString . PHP_EOL;
echo "Uppercase: " . convertToUppercase($enteredString) . PHP_EOL;
echo "Lowercase: " . convertToLowercase($enteredString) . PHP_EOL;
echo "First Letter Uppercase: " . firstLetterUppercase($enteredString) . PHP_EOL;
echo "First Letter of Each Word Capitalized: " . firstLetterOfEachWordCapitalized($enteredString) . PHP_EOL;
?>
