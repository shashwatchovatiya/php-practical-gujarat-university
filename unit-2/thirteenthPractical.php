<!-- Write a program in PHP to sort the array of given 5 numbers in
ascending and descending order -->
<?php
// Create an array with 5 numbers
$numbers = array(45, 12, 78, 34, 23);

// Display original array
echo "<h3>Original Array:</h3>";
print_r($numbers);

// Sort in ascending order
$asc = $numbers; 
sort($asc);

echo "<h3>Array in Ascending Order:</h3>";
print_r($asc);

// Sort in descending order
$desc = $numbers; 
rsort($desc);

echo "<h3>Array in Descending Order:</h3>";
print_r($desc);
?>
