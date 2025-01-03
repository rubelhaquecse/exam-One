<?php
    $strings = ["Hello", "World", "PHP", "Programming"];

    foreach ($strings as $string) { // Fix: use $string to match the loop variable
        $vowel_count = preg_match_all('/[aeiouAEIOU]/', $string); // Correct variable usage

        $reversed_string = strrev($string);

        echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string \n";
    }
?>
