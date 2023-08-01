<?php
function findFirstDifferentCharacter($string1, $string2) {
    $minLength = min(strlen($string1), strlen($string2));

    for ($i = 0; $i < $minLength; $i++) {
        if ($string1[$i] !== $string2[$i]) {
            return "First difference between two strings at position " . ($i + 1) . ": \"$string1[$i]\" vs \"$string2[$i]\"";
        }
    }

    if (strlen($string1) !== strlen($string2)) {
        $longerString = strlen($string1) > strlen($string2) ? $string1 : $string2;
        return "Strings have different lengths. First difference at position " . ($minLength + 1) . ": \"" . $longerString[$minLength] . "\" vs \"\"";
    }

    return "No difference found.";
}

// Example usage:
$string1 = 'dragonball';
$string2 = 'dragonboll';
echo findFirstDifferentCharacter($string1, $string2) . PHP_EOL;
?>
