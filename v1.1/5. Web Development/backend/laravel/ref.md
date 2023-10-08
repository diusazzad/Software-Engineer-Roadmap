Using collect() (Laravel Collection)
Laravel provides a powerful collect() function to work with arrays. It allows you to create collections, which are an enhanced way to work with arrays, providing various methods for data manipulation and filtering:

php
Copy code
// Creating a Laravel collection from an array
$fruits = collect(["apple", "banana", "cherry"]);

// Creating a collection from an associative array
$person = collect(["first_name" => "John", "last_name" => "Doe"]);

// Creating an empty collection
$emptyCollection = collect();
Laravel collections offer extensive functionality beyond basic array manipulation, making it a powerful tool for working with data in Laravel applications.

Whether you're working in plain PHP or using Laravel, you have multiple options for creating arrays. The choice between the array() construct and [] shorthand often comes down to personal preference and coding style. In Laravel, you also have the option to use collections, which provide additional features for working with data structures.


2- Using array_change_key_case() in Laravel:
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





