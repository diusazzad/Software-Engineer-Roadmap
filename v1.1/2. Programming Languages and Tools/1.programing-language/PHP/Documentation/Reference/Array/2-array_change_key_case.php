<?php
    // The array_change_key_case() function in PHP is used to change the case of keys in an array to either uppercase or lowercase. It returns a new array with the keys changed to the specified case, while the original array remains unchanged.
    
// Sample array with mixed case keys
$originalArray = [
    'FirstName' => 'John',
    'lastName' => 'Doe',
    'aGe' => 30,
];

// Change all keys to lowercase
$lowercaseArray = array_change_key_case($originalArray, CASE_LOWER);

// Change all keys to uppercase
$uppercaseArray = array_change_key_case($originalArray, CASE_UPPER);

// Display the results
print_r($lowercaseArray);
print_r($uppercaseArray);

?>