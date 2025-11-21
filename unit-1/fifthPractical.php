<!-- 5. Write a PHP program to accept a number from user and find its square and cube. -->
<!DOCTYPE html>
<html>
<head>
    <title>Fifth Square and Cube Calculator</title>
</head>
<body>

<h2>Find Square and Cube of a Number</h2>

<form method="post">
    Enter a number: <input type="number" name="num" step="any" required>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];

    $square = $num * $num;
    $cube = $num * $num * $num;

    echo "<p>Number: <strong>$num</strong></p>";
    echo "<p>Square: <strong>$square</strong></p>";
    echo "<p>Cube: <strong>$cube</strong></p>";
}
?>

</body>
</html>
