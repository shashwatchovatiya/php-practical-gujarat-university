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
$sql = "ALTER TABLE Student ADD Stud_Address VARCHAR(100)";

if(mysqli_query($conn , $sql)){
	echo"<br>Table new column add success fuly";
	
}else{
	echo"<br>Not created a coulmn".mysqli_error($conn);
}


// update query
$sql = "UPDATE Student SET Stud_Address = 'Ahmedabad' WHERE Student_id = 13";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<br> Record updated successfully!";
} else {
    echo "<br> Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
