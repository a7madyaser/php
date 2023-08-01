<?php
function getNextLetter($letter) {
    // Check if the input is a single character
    if (strlen($letter) !== 1) {
        return "Invalid input. Please enter a single letter.";
    }

    // Get the ASCII value of the letter
    $asciiValue = ord($letter);

    // Increment the ASCII value by one
    $nextAsciiValue = $asciiValue + 1;

    // Handle the edge case for 'z' (ASCII value 122)
    if ($nextAsciiValue > 122) {
        $nextAsciiValue = 97; // ASCII value for 'a'
    }

    // Convert the next ASCII value back to the letter
    $nextLetter = chr($nextAsciiValue);

    return $nextLetter;
}

// Example usage:
$letter1 = 'a';
$letter2 = 'z';
echo "Next letter of '$letter1': " . getNextLetter($letter1) . PHP_EOL;
echo "Next letter of '$letter2': " . getNextLetter($letter2) . PHP_EOL;
?>
