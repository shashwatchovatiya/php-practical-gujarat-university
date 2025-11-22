<!-- Create two functions in PHP, parameterized and non
parameterized for implementing string concatenation
operation. 
 -->

<?php
// Non-parameterized function
function concatStringsNonParam() {
    $str1 = "Hello";
    $str2 = "World";
    $result = $str1 . " " . $str2;
    return $result;
}

// Parameterized function
function concatStringsParam($str1, $str2) {
    $result = $str1 . " " . $str2;
    return $result;
}

// Using non-parameterized function
echo "<h3>Non-Parameterized Function:</h3>";
echo concatStringsNonParam();  // Output: Hello World

// Using parameterized function
echo "<h3>Parameterized Function:</h3>";
echo concatStringsParam("Good", "Morning");  // Output: Good Morning
?>
