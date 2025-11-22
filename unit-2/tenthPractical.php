<!-- Create an array named $sub, assign five elements to it and
display the elements assigned using for loop and foreach
statement  -->


<?php
// Create an array with 5 subjects
$sub = array("Maths", "Science", "English", "History", "Computer");

// Display elements using for loop
echo "<h3>Display using for loop:</h3>";
for ($i = 0; $i < count($sub); $i++) {
    echo $sub[$i] . "<br>";
}

// Display elements using foreach loop
echo "<h3>Display using foreach loop:</h3>";
foreach ($sub as $subject) {
    echo $subject . "<br>";
}
?>
