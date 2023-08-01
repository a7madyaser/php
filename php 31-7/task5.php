<?php
function extractUsernameFromEmail($email) {
    $parts = explode('@', $email);
    return $parts[0];
}

// Example usage:
$email = 'info@orange.com';
echo "Email: " . $email . PHP_EOL;
echo "Username: " . extractUsernameFromEmail($email) . PHP_EOL;
?>
