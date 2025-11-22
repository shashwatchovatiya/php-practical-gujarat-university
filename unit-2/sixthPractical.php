<!-- Create an array with 5 elements. Find and display minimum and maximum value from the array.  -->
<?php
// Create an array with 5 elements
$numbers = array(25, 80, 12, 45, 67);

// Display the array
echo "Array elements: <br>";
foreach ($numbers as $num) {
    echo $num . "<br>";
}

// Find minimum and maximum
$minValue = min($numbers);
$maxValue = max($numbers);

// Display results
echo "<br>Minimum value: " . $minValue;
echo "<br>Maximum value: " . $maxValue;
?>
