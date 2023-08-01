<?php
function getLastThreeCharacters($str) {
    return substr($str, -3);
}

// Example usage:
$string = 'info@orange.com';
echo "String: " . $string . PHP_EOL;
echo "Last Three Characters: " . getLastThreeCharacters($string) . PHP_EOL;
?>
