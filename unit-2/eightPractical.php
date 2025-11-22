<!-- Write a PHP program that checks whether the element is exists
in the array or not. Give acknowledgement from the same.  -->

<?php
// Create an array
$fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");

// Element to search
$search = "Mango";   // Try changing this value (e.g., "Pineapple")

echo "Array elements: <br> <BR>";

foreach ($fruits as $fruit) {
    echo "<li> $fruit </li>" ;
    echo "<br>";
}

// Check if element exists in the array
if (in_array($search, $fruits)) {
    echo "✅ The element '$search' exists in the array.";
} else {
    echo "❌ The element '$search' does NOT exist in the array.";
}
?>
