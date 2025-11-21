<!-- Create a function that accepts a number as argument and displays sum of digit of a number. E.g. If Number is 123 then sum of Digits is 6 i.e., 1+2+3 =6 Note: Input should be collected from user using  an HTML page.  -->
<!DOCTYPE html>
<html>
<head>
    <title>Eleven Sum of Digits</title>
</head>
<body>

<h2>Eleven Calculate Sum of Digits</h2>

<form method="post">
    Enter a number: <input type="number" name="number" min="0" required>
    <input type="submit" value="Calculate">
</form>

<?php
// Function to calculate sum of digits
function sumOfDigits($num) {
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;      // Add last digit
        $num = (int)($num / 10); // Remove last digit
    }
    return $sum;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $digitSum = sumOfDigits($number);

    echo "<p>Sum of digits of <strong>$number</strong> is: <strong>$digitSum</strong></p>";
}
?>

</body>
</html>
