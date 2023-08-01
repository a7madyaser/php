<?php
function generateRandomPassword($characters, $length) {
    $shuffledChars = str_shuffle($characters);
    $randomPassword = substr($shuffledChars, 0, $length);
    return $randomPassword;
}

// Example usage:
$characterSet = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$passwordLength = 6;
echo "Generated Password: " . generateRandomPassword($characterSet, $passwordLength) . PHP_EOL;
?>
