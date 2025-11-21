<!---Write a PHP script for creating a “Product” table in “MyDB”
database with fields Pro_id, Pro_name, Pro_price, Qty, Rate .
Also display an acknowledgement for the same as “Table
created successfully”. -->


<?php
$servername="localhost";
$username="root";
$password = "";
$database="my_db";
$conn=mysqli_connect($servername, $username, $password,$database);


if(!$conn){
	die("Not connect the SQL".mysqli_connect_error());
}else{
	echo("SQL Connect sucess full");
}

$sql = "CREATE DATABASE IF NOT EXISTS my_db";
$result = mysqli_query($conn,$sql);

if(!$result){
	echo("<br> Not create the Database not create".mysqli_error($conn));
}else{
	echo("<br> Datbase create sucess full");
}


$sql = ("CREATE TABLE IF NOT EXISTS Product
		(Pro_id INT PRIMARY KEY,
		 Pro_name varchar(50),
		 Pro_price INT,
		 Qty INT, 
		 Rate INT)
		 ");
$result2 = mysqli_query($conn,$sql)

if(!$result2){
	echo("<br> Not create the tabel not create".mysqli_error($conn));
}else{
	echo("<br> table create sucess full");
}

mysqli_close();
?>

