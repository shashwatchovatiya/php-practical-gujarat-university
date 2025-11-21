<?php
$server= "localhost";
$username= "root";
$password ="";
$database="my_db";

$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
	die("Your are not connect with DB".mysqli_connect_error());
	
}else{
	echo"<br>Your are connect with DB";
}
$sql = "CREATE TABLE IF NOT EXISTS Student (
            Student_id INT PRIMARY KEY AUTO_INCREMENT,
            Student_name VARCHAR(30),
            Course VARCHAR(20),
            Age INT NOT NULL,
            MobileNo VARCHAR(15)
        )";

$result = mysqli_query($con,$sql);

if(!$result){
	die("<br>Your table was not created".mysqli_error($con));
}else{
	
	echo"<br> Your table susccessfull created";
}

?>