<!-- Write a PHP program to print all even numbers till the entered number -->
 <!DOCTYPE html>
<html>
<head>
    <title>Nine Even Numbers Printer</title>
</head>
<body>

<h2>Print All Even Numbers Up To a Given Number</h2>

<form method="post">
    Enter a number: <input type="number" name="limit" min="0" required>
    <input type="submit" value="Show Even Numbers">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limit = $_POST['limit'];

    echo "<p>Even numbers from 0 to $limit:</p>";
    echo "<p>";

    for ($i = 0; $i <= $limit; $i++) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
    }

    echo "</p>";
}
?>

</body>
</html>
