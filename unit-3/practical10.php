<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_db";

// connect database
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Not connect the SQL " . mysqli_connect_error());
} else {
    echo("SQL Connect success full");
}

// when Delete button clicked
if (isset($_POST['delete'])) {
    $student_id = $_POST['student_id'];

    $sql = "DELETE FROM Student WHERE Student_id = '$student_id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_affected_rows($conn) > 0) {
            echo "<br> Record deleted successfully!";
        } else {
            echo "<br> No record found with Student_id = $student_id";
        }
    } else {
        echo "<br> Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!-- HTML FORM -->
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
</head>
<body>
    <h2>Delete Student Record</h2>
    <form method="post">
        <label>Enter Student ID:</label>
        <input type="number" name="student_id" required>
        <br><br>
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>
