<?php
function extractFileNameFromURL($url) {
    // Parse the URL to get the path
    $path = parse_url($url, PHP_URL_PATH);

    // Use basename() function to extract the file name from the path
    $fileName = basename($path);

    return $fileName;
}

// Example usage:
$url = 'http://www.orange.com/index.php';
echo "URL: " . $url . PHP_EOL;
echo "File Name: " . extractFileNameFromURL($url) . PHP_EOL;
?>
