<!-- Write a PHP script to retrieve and display the value of the
session variable "loginid".  -->
<?php
// Start the session
session_start();

// Check if the session variable exists
if (isset($_SESSION['loginid'])) {
    echo "Your Login ID is: " . $_SESSION['loginid'];
} else {
    echo "No login ID found in the session.";
}
?>
