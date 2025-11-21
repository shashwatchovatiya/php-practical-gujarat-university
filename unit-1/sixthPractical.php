<!-- Write a PHP program to find sum of n numbers. Take input from user -->
<!DOCTYPE html>
<html>
<head>
    <title>Sixth Sum of N Numbers</title>
</head>
<body>

<h2>Find the Sum of N Numbers</h2>

<form method="post">
    Enter numbers separated by commas:<br>
    <input type="text" name="numbers" placeholder="e.g. 10, 20, 30" required><br><br>
    <input type="submit" value="Calculate Sum">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];

    // Convert string to array using comma as delimiter
    $numArray = explode(',', $input);

    // Trim spaces and convert each to a number
    $sum = 0;
    foreach ($numArray as $value) {
        $num = floatval(trim($value));
        $sum += $num;
    }

    echo "<p>The sum of the entered numbers is: <strong>$sum</strong></p>";
}
?>

</body>
</html>
