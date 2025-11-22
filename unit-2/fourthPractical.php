<!-- Write a PHP script to check if a cookie named "visited" exists. If
it does, display a welcome message; otherwise, display a
default message.  -->
<?php
// Cookie name
$cookie_name = "visited";

// Check if cookie exists
if (isset($_COOKIE[$cookie_name])) {
    echo "Welcome back! You have visited before.";
} else {
    echo "Hello, this is your first visit!";
    
    // Set the cookie to expire in 1 hour
    setcookie($cookie_name, "yes", time() + 3600, "/");
}
?>
