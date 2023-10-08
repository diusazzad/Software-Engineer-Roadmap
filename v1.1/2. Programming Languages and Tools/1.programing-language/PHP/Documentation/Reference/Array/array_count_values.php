<?php  


// Sample data: An array of product categories
$categories = ["Electronics", "Clothing", "Electronics", "Home Decor", "Clothing", "Electronics"];

// Count the frequency of each category
$categoryCounts = array_count_values($categories);

// Display the results
foreach ($categoryCounts as $category => $count) {
    echo "Category: $category,  Count: $count\n";
}


// without usgn reference 
echo "<br>" . "without usgn reference" . "<br>";
function count_category_frequency($categories) {
    $categoryCounts = [];
    foreach ($categories as $category) {
      if (!isset($categoryCounts[$category])) {
        $categoryCounts[$category] = 0;
      }
      $categoryCounts[$category]++;
    }
    return $categoryCounts;
  }
  
  // Sample data: An array of product categories
  $categories = ["Electronics", "Clothing", "Electronics", "Home Decor", "Clothing", "Electronics"];
  
  // Count the frequency of each category
  $categoryCounts = count_category_frequency($categories);
  
  // Display the results
  foreach ($categoryCounts as $category => $count) {
      echo "Category: $category, Count: $count\n";
  }
  