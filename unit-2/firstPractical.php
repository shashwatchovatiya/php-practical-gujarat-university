<!-- <!DOCTYPE html>
<?php
$cookie_name = "username";
$cookie_value = "Welcome";
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // 3600 seconds = 1 hour
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html> -->


<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["username"])) {
    $cookie_name = "username";
    $cookie_value = htmlspecialchars($_POST["username"]); // sanitize input
    setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // expires in 1 hour
    echo "Cookie set. Please reload the page to see the value.<br><br>";
}
?>

<!-- HTML Form to get the username -->
<form method="post" action="">
  Enter your name: <input type="text" name="username">
  <input type="submit" value="Submit">
</form>

<br>

<?php
if (isset($_COOKIE["username"])) {
    echo "Cookie 'username' is set!<br>";
    echo "Value is: " . $_COOKIE["username"];
    echo "<br>Welcome" . htmlspecialchars($_COOKIE["username"]) . "!";
} else {
    echo "Cookie 'username' is not set!";
}
?>

</body>
</html>
