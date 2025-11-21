<?php
$servername = "localhost";
$username = "root";
$password = "";

// connect server (no database first)
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Not connect the SQL " . mysqli_connect_error());
} else {
    echo "SQL Connect success full";
}

// create database
$sql = "CREATE DATABASE IF NOT EXISTS Product_Details";
if (mysqli_query($conn, $sql)) {
    echo "<br> Database created successfully";
} else {
    echo "<br> Error creating database: " . mysqli_error($conn);
}

// select the database
mysqli_select_db($conn, "Product_Details");

// create product table
$sql = "CREATE TABLE IF NOT EXISTS Product (
            Pro_id INT PRIMARY KEY,
            Pro_name VARCHAR(50),
            Pro_price INT,
            QOH INT
        )";

if (mysqli_query($conn, $sql)) {
    echo "<br> Table created successfully";
} else {
    echo "<br> Error creating table: " . mysqli_error($conn);
}

// insert when submit
if (isset($_POST['submit'])) {
    $pro_id = $_POST['pro_id'];
    $pro_name = $_POST['pro_name'];
    $pro_price = $_POST['pro_price'];
    $qoh = $_POST['qoh'];

    // check duplicate Pro_id
    $check_sql = "SELECT * FROM Product WHERE Pro_id = '$pro_id'";
    $result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<br> Error: Product ID already exists!";
    } else {
        $insert_sql = "INSERT INTO Product (Pro_id, Pro_name, Pro_price, QOH)
                       VALUES ('$pro_id', '$pro_name', '$pro_price', '$qoh')";

        if (mysqli_query($conn, $insert_sql)) {
            echo "<br> Record inserted successfully!";
        } else {
            echo "<br> Error inserting record: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>

<!-- HTML FORM -->
<!DOCTYPE html>
<html>
<head>
    <title>Insert Product</title>
</head>
<body>
    <h2>Insert Product Record</h2>
    <form method="post">
        <label>Product ID:</label>
        <input type="number" name="pro_id" required><br><br>

        <label>Product Name:</label>
        <input type="text" name="pro_name" required><br><br>

        <label>Product Price:</label>
        <input type="number" name="pro_price" required><br><br>

        <label>Quantity On Hand (QOH):</label>
        <input type="number" name="qoh" required><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
