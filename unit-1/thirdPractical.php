<!-- 3. Write a PHP program that prints Fibonacci series till the number entered by user. -->
<!DOCTYPE html>
<html>
<head>
    <title>Third Fibonacci Series</title>
</head>
<body>

<h2>Fibonacci Series Up To a Given Number</h2>

<form method="post">
    Enter a number: <input type="number" name="limit" min="0" required>
    <input type="submit" value="Generate Series">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limit = $_POST['limit'];

    $a = 0;
    $b = 1;

    echo "<p><strong>Fibonacci series up to $limit:</strong><br>";

    if ($limit >= 0) {
        echo "$a ";
    }

    while ($b <= $limit) {
        echo "$b ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

    echo "</p>";
}
?>

</body>
</html>
