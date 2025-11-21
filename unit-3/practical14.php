<?php
$servername = "localhost";
$username = "root";
$password = "";

// connect to MySQL server (no database yet)
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Not connect the SQL " . mysqli_connect_error());
} else {
    echo "SQL Connect success full";
}

// create new database
$sql = "CREATE DATABASE IF NOT EXISTS CompanyDB";
if (mysqli_query($conn, $sql)) {
    echo "<br> Database CompanyDB created successfully";
} else {
    echo "<br> Error creating database: " . mysqli_error($conn);
}

// select database
mysqli_select_db($conn, "CompanyDB");

// create Employee table
$sql = "CREATE TABLE IF NOT EXISTS Employee (
            Emp_id INT PRIMARY KEY,
            Emp_name VARCHAR(50),
            Job_code VARCHAR(20),
            Salary INT,
            MobileNo BIGINT
        )";

if (mysqli_query($conn, $sql)) {
    echo "<br> Table Employee created successfully";
} else {
    echo "<br> Error creating table: " . mysqli_error($conn);
}

// insert record when form submitted
if (isset($_POST['submit'])) {
    $emp_id = $_POST['emp_id'];
    $emp_name = trim($_POST['emp_name']);
    $job_code = $_POST['job_code'];
    $salary = $_POST['salary'];
    $mobile_no = $_POST['mobile_no'];

    // ---- Validation ----
    if ($emp_id < 0 || $salary < 0 || $mobile_no < 0) {
        echo "<br> Error: Employee ID, Salary, and Mobile No must not be negative!";
    } elseif (empty($emp_name)) {
        echo "<br> Error: Employee Name cannot be blank!";
    } elseif (strlen($salary) > 5) {
        echo "<br> Error: Salary must not exceed 5 digits!";
    } else {
        // check duplicate Emp_id
        $check_sql = "SELECT * FROM Employee WHERE Emp_id = '$emp_id'";
        $result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<br> Error: Employee ID already exists!";
        } else {
            // insert query
            $insert_sql = "INSERT INTO Employee (Emp_id, Emp_name, Job_code, Salary, MobileNo) 
                           VALUES ('$emp_id', '$emp_name', '$job_code', '$salary', '$mobile_no')";
            
            if (mysqli_query($conn, $insert_sql)) {
                echo "<br> Record inserted successfully!";
            } else {
                echo "<br> Error inserting record: " . mysqli_error($conn);
            }
        }
    }
}

mysqli_close($conn);
?>

<!-- HTML FORM -->
<!DOCTYPE html>
<html>
<head>
    <title>Insert Employee</title>
</head>
<body>
    <h2>Insert Employee Record</h2>
    <form method="post">
        <label>Employee ID:</label>
        <input type="number" name="emp_id" required><br><br>

        <label>Employee Name:</label>
        <input type="text" name="emp_name" required><br><br>

        <label>Job Code:</label>
        <input type="text" name="job_code" required><br><br>

        <label>Salary:</label>
        <input type="number" name="salary" required><br><br>

        <label>Mobile No:</label>
        <input type="number" name="mobile_no" required><br><br>

        <input type="submit" name="submit" value="Insert">
    </form>
</body>
</html>
