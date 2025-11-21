<!-- Accept a string from user. Write PHP program to check whether that entered string is palindrome or not. -->
<!DOCTYPE html>
<html>
<head>
    <title>Fourth Palindrome Checker</title>
</head>
<body>

<h2>Check if a String is a Palindrome</h2>

<form method="post">
    Enter a string: <input type="text" name="inputStr" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $originalStr = $_POST['inputStr'];
    
    // Remove spaces and convert to lowercase for accurate comparison
    $cleanStr = strtolower(str_replace(' ', '', $originalStr));
    
    // Reverse the cleaned string
    $reversedStr = strrev($cleanStr);
    
    if ($cleanStr == $reversedStr) {
        echo "<p><strong>\"$originalStr\"</strong> is a Palindrome.</p>";
    } else {
        echo "<p><strong>\"$originalStr\"</strong> is NOT a Palindrome.</p>";
    }
}
?>

</body>
</html>
