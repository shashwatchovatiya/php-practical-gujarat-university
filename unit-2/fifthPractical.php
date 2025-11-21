<!-- <?php
// Create an empty array
$numbers = array();

// Fill array dynamically with 5 elements
for ($i = 1; $i <= 5; $i++) {
    $numbers[] = $i * 10;  // Example: multiples of 10
}

// Print array elements using foreach
echo "Array elements:<br>";
foreach ($numbers as $num) {
    echo $num . "<br>";
}

// Or print the full array (debugging)
echo "<br>Full Array:<br>";
print_r($numbers);
?> -->


<?php
// Step 1: Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect values into an array
    $values = array(
        $_POST['val1'],
        $_POST['val2'],
        $_POST['val3'],
        $_POST['val4'],
        $_POST['val5']
    );

    // Step 2: Print array elements
    echo "<h3>You entered:</h3>";
    foreach ($values as $val) {
        echo $val . "<br>";
    }

    // Step 3: Show the full array (for debugging)
    echo "<h3>Full Array:</h3>";
    echo "<pre>";
    print_r($values);
    echo "</pre>";
} else {
    // Step 4: Show input form
    ?>
    <form method="post">
        Enter value 1: <input type="text" name="val1"><br><br>
        Enter value 2: <input type="text" name="val2"><br><br>
        Enter value 3: <input type="text" name="val3"><br><br>
        Enter value 4: <input type="text" name="val4"><br><br>
        Enter value 5: <input type="text" name="val5"><br><br>
        <button type="submit">Submit</button>
    </form>
    <?php
}
?>
