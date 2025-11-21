<!-- Create a function that accepts 3 numbers as parameters and check whether the sum of 3 numbers is prime or not. Note: Input should be collected from user using an HTML page.  -->
<!DOCTYPE html>
<html>
<head>
    <title>Ten Check if Sum is Prime</title>
</head>
<body>

<h2>Check Whether Sum of 3 Numbers is Prime</h2>

<form method="post">
    Enter first number: <input type="number" name="num1" required><br><br>
    Enter second number: <input type="number" name="num2" required><br><br>
    Enter third number: <input type="number" name="num3" required><br><br>
    <input type="submit" value="Check">
</form>

<?php
// Function to check if a number is prime
function isPrime($n) {
    if ($n <= 1) return false;
    if ($n == 2) return true;
    if ($n % 2 == 0) return false;

    for ($i = 3; $i <= sqrt($n); $i += 2) {
        if ($n % $i == 0) return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect numbers from user
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    // Calculate the sum
    $sum = $num1 + $num2 + $num3;

    // Display the result
    echo "<p>Sum of $num1, $num2, and $num3 is: <strong>$sum</strong></p>";

    if (isPrime($sum)) {
        echo "<p>The sum <strong>$sum</strong> is a <strong>Prime Number</strong>.</p>";
    } else {
        echo "<p>The sum <strong>$sum</strong> is <strong>Not a Prime Number</strong>.</p>";
    }
}
?>

</body>
</html>
