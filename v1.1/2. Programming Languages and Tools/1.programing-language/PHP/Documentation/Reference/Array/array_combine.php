<?php 

// array_combine() is a PHP function used to create a new array by using one array for keys and another array for values. It takes two arrays as input, one for keys and one for values, and combines them to form a new associative array where the values from the first array become keys, and the values from the second array become the corresponding values.

echo "base code" . "<br>";
function array_combine_function($keys, $values) {
    $combined_array = [];
    foreach ($keys as $i => $key) {
      if (isset($values[$i])) {
        $combined_array[$key] = $values[$i];
      }
    }
    return $combined_array;
  }
  
  $keys = ["a", "b", "c"];
  $values = [1, 2, 3];
  
  $combined_array = array_combine_function($keys, $values);
  
  print_r($combined_array);
  


// Example arrays for keys and values
echo "<br>" . "Example arrays for keys and values" . "<br>";

$keys = ["apple", "banana", "cherry"];
$values = [3.9, 1.2, 3.0];

// Combine the arrays to create a new associative array
$fruits = array_combine($keys, $values);

// Output the resulting associative array
print_r($fruits);
echo "<br>";


// Sample data: Product IDs and their corresponding names
echo "Sample data: Product IDs and their corresponding names" . "<br>";

$productIds = [101, 102, 103, 104];
$productNames = ["Laptop", "Smartphone", "Tablet", "Headphones"];

// Create an associative array to map Product IDs to Product Names
$inventory = array_combine($productIds, $productNames);

// Function to retrieve the product name based on its ID
function getProductById($productId, $inventory) {
    if (array_key_exists($productId, $inventory)) {
        return $inventory[$productId];
    } else {
        return "Product not found";
    }
}

// Usage example
$productId = 102; // ID of the product you want to retrieve
$productName = getProductById($productId, $inventory);

if ($productName !== "Product not found") {
    echo "Product ID $productId corresponds to: $productName";
} else {
    echo "Product not found in inventory";
}

?>