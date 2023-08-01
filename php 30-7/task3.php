<!DOCTYPE html>
<html>
<head>
    <title>Simple Name Form</title>
</head>
<body>
    <h2>Enter Your Name</h2>
    <form action="display_name.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php
// Sample strings
$string1 = "Tomorrow I 'll learn PHP global variables.";
$string2 = "This is a bad command: del c:.";

// Replace the single quotes with double quotes and display the strings
echo str_replace("'", "'", $string1) . PHP_EOL;
echo str_replace("'", "'", $string2) . PHP_EOL;
?>
