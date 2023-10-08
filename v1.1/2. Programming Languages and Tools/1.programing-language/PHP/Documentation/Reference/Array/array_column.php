<?php 


// The array_column() function in PHP is used to fetch the values from a single column of an array or a multi-dimensional array. It is particularly useful when you want to extract specific data from an array of records, such as a list of items with associated attributes.

// Here's how to use array_column() in PHP:


// $people = [
//     ['id' => 1, 'name' => 'John', 'age' => 30],
//     ['id' => 2, 'name' => 'Jane', 'age' => 25],
//     ['id' => 3, 'name' => 'Bob', 'age' => 35],
// ];

// // Extract the 'name' column from the array
// $names = array_column($people, 'name');

// // Extract the 'age' column from the array
// $ages = array_column($people, 'age');

// // Display the results
// print_r($names);
// print_r($ages);


// base code 
// Get the values from a single column of an array:


// function get_column_values($array, $column_key) {
//   $values = [];
//   foreach ($array as $row) {
//     if (isset($row[$column_key])) {
//       $values[] = $row[$column_key];
//     }
//   }
//   return $values;
// }

// $array = [
//   ['posts' => [['title' => 'Post 1'], ['title' => 'Post 2']]],
//   ['posts' => [['title' => 'Post 3'], ['title' => 'Post 4']]],
// ];

// $postTitles = get_column_values($array, 'posts', 0, 'title');

// print_r($postTitles);


// Real life example
// Sample data representing a list of products
$products = [
    ['name' => 'Laptop', 'price' => 999, 'category' => 'Electronics'],
    ['name' => 'Smartphone', 'price' => 499, 'category' => 'Electronics'],
    ['name' => 'Book', 'price' => 19, 'category' => 'Books'],
    ['name' => 'Headphones', 'price' => 79, 'category' => 'Electronics'],
    // ... more products ...
];

// Extract the 'name' column from the array
$productNames = array_column($products, 'price');

// Display the product names
foreach ($productNames as $productName) {
    echo $productName . "<br>";
}

?>