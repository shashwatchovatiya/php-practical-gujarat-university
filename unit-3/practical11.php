<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "my_db";

// connect to database
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Not connect the SQL " . mysqli_connect_error());
} else {
    echo "SQL Connect success full";
}

// when Update button clicked
if (isset($_POST['update'])) {
    $student_id = $_POST['student_id'];
    $student_name = trim($_POST['student_name']);
    $course_id = $_POST['course_id'];
    $mobile_no = $_POST['mobile_no'];

    // --- Validation ---
    if ($student_id < 0 || $course_id < 0 || $mobile_no < 0) {
        echo "<br> Error: Student ID, Course ID, and Mobile No must not be negative!";
    } elseif (empty($student_name)) {
        echo "<br> Error: Student Name cannot be blank!";
    } else {
        // update query
        $sql = "UPDATE Student 
                SET Student_name = '$student_name', 
                    Course = '$course_id', 
                    MobileNo = '$mobile_no'
                WHERE Student_id = '$student_id'";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_affected_rows($conn) > 0) {
                echo "<br> Record updated successfully!";
            } else {
                echo "<br> No record found with Student_id = $student_id";
            }
        } else {
            echo "<br> Error updating record: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>

<!-- HTML FORM -->
<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>
    <h2>Update Student Record</h2>
    <form method="post">
        <label>Student ID:</label>
        <input type="number" name="student_id" required><br><br>

        <label>Student Name:</label>
        <input type="text" name="student_name" required><br><br>

        <label>Course ID:</label>
        <input type="number" name="course_id" required><br><br>

        <label>Mobile No:</label>
        <input type="number" name="mobile_no" required><br><br>

        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
