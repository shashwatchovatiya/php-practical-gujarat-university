<!-- Write a PHP program that changes color of the web page using switch case.  -->
<!DOCTYPE html>
<html>
<head>
    <title>Twelve Change Background Color</title>
</head>
<?php
$bgColor = "white"; // Default color
$selectedColor = ""; // Default selected value

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedColor = $_POST['color'];

    // Switch case to determine background color
    switch ($selectedColor) {
        case "red":
        case "green":
        case "blue":
        case "yellow":
        case "gray":
            $bgColor = $selectedColor;
            break;
        default:
            $bgColor = "white";
    }
}
?>

<!-- Apply background color -->
<body style="background-color: <?= $bgColor ?>;">

<h2>Choose a Color to Change Background</h2>

<form method="post">
    <label>Select Color:</label>
    <select name="color">
        <option value="red" <?= ($selectedColor == "red") ? "selected" : "" ?>>Red</option>
        <option value="green" <?= ($selectedColor == "green") ? "selected" : "" ?>>Green</option>
        <option value="blue" <?= ($selectedColor == "blue") ? "selected" : "" ?>>Blue</option>
        <option value="yellow" <?= ($selectedColor == "yellow") ? "selected" : "" ?>>Yellow</option>
        <option value="gray" <?= ($selectedColor == "gray") ? "selected" : "" ?>>Gray</option>
    </select>
    <input type="submit" value="Change Color">
</form>

</body>
</html>
