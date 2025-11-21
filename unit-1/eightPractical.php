<!-- Accept a number from user as “Radius” of a circle. Write PHP program find Area of a Circle. ( Area = PI * radius * radius). -->
<!DOCTYPE html>
<html>
<head>
    <title>Eight Area of a Circle</title>
</head>
<body>

<h2>Calculate Area of a Circle</h2>

<form method="post">
    Enter radius of the circle: <input type="number" name="radius" step="any" min="0" required>
    <input type="submit" value="Calculate Area">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];
    $pi = 3.14159;

    $area = $pi * $radius * $radius;

    echo "<p>The area of the circle with radius <strong>$radius</strong> is: <strong>$area</strong></p>";
}
?>

</body>
</html>
