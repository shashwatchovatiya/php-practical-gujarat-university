<!-- Write a PHP script to delete a cookie named "welcome".  -->

<!DOCTYPE html>
<?php
// Delete the "welcome" cookie by setting its expiration time in the past
setcookie("welcome", "", time() - 60, "/");
?>
<html>
<body>

<!-- <?php
echo "Cookie 'welcome' has been deleted.";
?> -->

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
$cookie_name = "welcome";
$cookie_value = "Hello User";
// Check if "Delete Cookie" button was clicked
if (isset($_POST['delete_cookie'])) {
    // Delete the cookie by setting expiration time in the past
    setcookie($cookie_name, "", time() - 10 , "/");
    // setcookie("welcome", "", time() - 10, "/");
    // setcookie("username", "", time() - 10, "/");

    echo "Cookie '$cookie_name' has been deleted.<br><br>";
} else {
    // Set the cookie to expire in 1 minute
    setcookie($cookie_name, $cookie_value, time() + 10, "/"); // 10 seconds
}
?>

<!-- Button to delete the cookie -->
<form method="post" action="">
    <input type="submit" name="delete_cookie" value="Clear Cookie">
</form>

</body>
</html>
