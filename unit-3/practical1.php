<!---Write a PHP script for that creates a database named "DB-1"in
MySQL. And also create a table “myTable” in above created
database “DB-1”. -->


<?php
$servername= "localhost";
$username="root";
$password="";
$database = "db_1";
$connection = mysqli_connect($servername,$username,$password,$database);

if(!$connection){
	die("My sql connection not sucess fule".mysqli_connect_error());
	
}else{
	echo("Data base connection sucess fully");
}


$sql= "CREATE DATABASE IF NOT EXISTS DB_1";
$result = mysqli_query($connection,$sql);

if(!$result){
		die("My sql database created not sucess fuly");
}else{
	echo("create a new database");
}

$sql = "CREATE TABLE IF NOT EXISTS mytable(ID INT PRIMARY KEY,NAME VARCHAR(50))";

$result2 = mysqli_query($connection,$sql);


if(!$result){
		die("not table created");
}else{
	echo("create a table <br> Hello i am Shashwat");
}

mysqli_close();
?>
