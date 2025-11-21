<!-- Write a PHP program to check whether the number entered is Positive / Negative or Zero entered by user -->

<!DOCTYPE html>
<html>
<head>
    <title>First Practical Number Check</title>
</head>
<body>

<h2>Check if Number is Positive, Negative, or Zero</h2>

<form method="post">
    Enter a number: <input type="number" name="num" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];

    if ($num > 0) {
        echo "<p>The number $num is <strong>Positive</strong>.</p>";
    } elseif ($num < 0) {
        echo "<p>The number $num is <strong>Negative</strong>.</p>";
    } else {
        echo "<p>The number is <strong>Zero</strong>.</p>";
    }
}
?>

</body>
</html>
