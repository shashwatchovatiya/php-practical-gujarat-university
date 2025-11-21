<!-- Write a PHP program to find maximum number from the two numbers entered by user -->
<!DOCTYPE html>
<html>
<head>
    <title>Second Find Maximum Number</title>
</head>
<body>

<h2>Find the Maximum of Two Numbers</h2>

<form method="post">
    Enter first number: <input type="number" name="num1" required><br><br>
    Enter second number: <input type="number" name="num2" required><br><br>
    <input type="submit" value="Find Maximum">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2) {
        echo "<p>The maximum number is: <strong>$num1</strong></p>";
    } elseif ($num2 > $num1) {
        echo "<p>The maximum number is: <strong>$num2</strong></p>";
    } else {
        echo "<p>Both numbers are equal: <strong>$num1</strong></p>";
    }
}
?>

</body>
</html>
