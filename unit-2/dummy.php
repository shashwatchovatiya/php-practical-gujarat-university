<?php
// Step 1: MySQL connection
$h = "localhost"; // host
$u = "root"; // username
$p = ""; // password
// connect
$con = new mysqli($h, $u, $p);
// check
if ($con->connect_error) {
 die("Fail: " . $con->connect_error);
}
echo "Connected!<br>";
// Step 2: Create Database
$sql = "CREATE DATABASE `DB-1`";
if ($con->query($sql) === TRUE) {
 echo "DB 'DB-1' created.<br>";
} else {
 echo "DB error: " . $con->error . "<br>";
}
// Step 3: Select DB
$con->select_db("DB-1");
// Step 4: Create Table
$sql = "CREATE TABLE myTable (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(50) NOT NULL,
 age INT NOT NULL
)";
if ($con->query($sql) === TRUE) {
 echo "Table 'myTable' created.<br>";
} else {
 echo "Table error: " . $con->error . "<br>";
}
// close
$con->close();
?>

