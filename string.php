<?php
// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count the number of vowels in a string
function countVowels($string) {
    // Convert the string to lowercase to make the vowel counting case-insensitive
    $lowercaseString = strtolower($string);
    // Count the vowels
    $vowelCount = preg_match_all('/[aeiou]/', $lowercaseString);
    return $vowelCount;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the number of vowels
    $vowelCount = countVowels($string);
    // Reverse the string
    $reversedString = strrev($string);
    // Print the result
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
