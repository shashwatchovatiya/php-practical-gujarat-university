<?php
// Create an array with duplicate values
$numbers = array(10, 20, 30, 20, 40, 10, 50, 30);

// Display original array
echo "Original Array: <br>";
print_r($numbers);

// Remove duplicates using array_unique()
$uniqueNumbers = array_unique($numbers);

// Display array after removing duplicates
echo "<br><br>Array after removing duplicates: <br>";
print_r($uniqueNumbers);
?>

<!-- Output -->

<!-- Original Array:
Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 20 [4] => 40 [5] => 10 [6] => 50 [7] => 30 )

Array after removing duplicates:
Array ( [0] => 10 [1] => 20 [2] => 30 [4] => 40 [6] => 50 ) -->