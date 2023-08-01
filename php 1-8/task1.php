<?php

function generate_paragraph($colors) {
    $memory_scene = "The memory of that scene for me is like a frame of film forever frozen at that moment: ";
    
    // Extracting colors from the $colors array
    list($red, $green, $white) = $colors;
    
    // Generating the paragraph with the given colors
    $paragraph = $memory_scene . "the $red carpet, the $green lawn, the $white house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
    return $paragraph;
}

// $colors array
$colors = ['red', 'green', 'white'];

// Generate the paragraph
$paragraph = generate_paragraph($colors);
echo $paragraph;

?>





