<?php
// Create an array
$numbers = array(10, 20, 30, 10, 40, 10, 50, 20, 10);

// Value to search
$search = 10;

// Count occurrences
$count = 0;
foreach ($numbers as $num) {
    if ($num == $search) {
        $count++;
    }
}

// Display results
echo "Array elements: ";
print_r($numbers);

echo "<br><br>The value $search appears $count times in the array.";
?>
