<!-- Accept a two numbers from user. Write a PHP program to Add, Subtract and Multiply the numbers and displays result -->
<!DOCTYPE html>
<html>
<head>
    <title>Seven Basic Arithmetic Operations</title>
</head>
<body>

<h2>Add, Subtract, and Multiply Two Numbers</h2>

<form method="post">
    Enter first number: <input type="number" name="num1" step="any" required><br><br>
    Enter second number: <input type="number" name="num2" step="any" required><br><br>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Perform operations
    $sum = $num1 + $num2;
    $diff = $num1 - $num2;
    $product = $num1 * $num2;

    // Display results
    echo "<h3>Results:</h3>";
    echo "<p>Addition: <strong>$num1 + $num2 = $sum</strong></p>";
    echo "<p>Subtraction: <strong>$num1 - $num2 = $diff</strong></p>";
    echo "<p>Multiplication: <strong>$num1 × $num2 = $product</strong></p>";
}
?>

</body>
</html>
