<?php

// Sample array
// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// // Split the array into chunks of 3 elements each
// $chunks = array_chunk($array, 3);

// // Display the result
// print_r($chunks);
// Sample array of items



// --------------------------------- 
// function chunk_array($array, $size) {
//     $chunks = [];
//     $chunk = [];
//     foreach ($array as $element) {
//       if (count($chunk) === $size) {
//         $chunks[] = $chunk;
//         $chunk = [];
//       }
//       $chunk[] = $element;
//     }
//     if (count($chunk) > 0) {
//       $chunks[] = $chunk;
//     }
//     return $chunks;
//   }
  
//   $array = [1, 2, 3, 4, 5];
//   $chunks = chunk_array($array, 2);
  
//   foreach ($chunks as $chunk) {
//     print_r($chunk);
//     echo "\n";
//   }

  // Sample array of items
// $items = ['apple', 'banana', 'cherry', 'date', 'fig', 'grape', 'kiwi', 'lemon'];

// // Split the array into chunks of size 3
// $chunks = array_chunk($items, 2);

// // Output the result
// print_r($chunks);


// Sample array of items
$items = range(1, 50); // Generates an array from 1 to 50

// Number of items per page
$itemsPerPage = 10;

// Current page (you can change this to navigate between pages)
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the start index for the current page
$startIndex = ($currentPage - 1) * $itemsPerPage;

// Use array_chunk to divide the items into pages
$pages = array_chunk($items, $itemsPerPage);

// Get the items for the current page
$currentItems = isset($pages[$currentPage - 1]) ? $pages[$currentPage - 1] : [];

// Display the items for the current page
echo "<h1>Page $currentPage</h1>";
echo "<ul>";
foreach ($currentItems as $item) {
    echo "<li>$item</li>";
}
echo "</ul>";

// Pagination links
echo "<div>";
for ($i = 1; $i <= count($pages); $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}
echo "</div>";

// Here's how this code works:

// We define a sample array of items, in this case, numbers from 1 to 50.

// We specify the number of items per page and the current page.

// We calculate the start index for the current page to slice the array appropriately.

// We use array_chunk to divide the items into pages.

// We retrieve the items for the current page based on the calculated start index.

// We display the items and provide pagination links to navigate between pages.

// // Practical Use Cases
// // array_chunk() can be useful in various scenarios, such as:

// Paginating large datasets for display in web applications, where each chunk represents a page of data.
// Processing data in batches, such as batch uploads or batch processing of records.
// Splitting data for parallel processing in multi-threaded or multi-processing environments.
// Grouping data for easier manipulation and analysis.
// It's a versatile function that can simplify working with large arrays and datasets in PHP.
  ?>