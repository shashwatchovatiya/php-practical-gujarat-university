<!-----

Create a form containing one input field (Product_id) and a
Delete button. When the user clicks on the Delete button a PHP
script should get executed and should delete the record of the
product for the Product_id specified. 


----->

<html>

	<body>
		<form method="post">
			Enter the id what you want to delete in DB: 
			<input type="number" name="delid"/><br><br>
			
			
			<input type="submit">
		</form>
	</body>

	<?php
	$servername ="localhost";
	$username="root";
	$password="";
	$database= "my_db";
	$con= mysqli_connect($servername,$username,$password,$database);

		if(!$con){
			die("You are not connect with db".mysqli_connect_error());
		}else{
			echo "Your are connect with DB";
		}

		if($_SERVER['REQUEST_METHOD']=="POST"){
			$del_id = $_POST['delid'];
			
			$sql = "DELETE FROM Product WHERE Pro_id= '$del_id'";
			
			if(mysqli_query($con,$sql)){
				
				if (mysqli_affected_rows($con) > 0) {
					echo "✅ Record with Product_id =" .$del_id ."eleted successfully.";
				} else {
					echo "⚠ No record found with Product_id = ". $del_id;
				}
			}else {
				echo "❌ Error deleting record: " . mysqli_error($con);
			}


		
		}
		

mysqli_close($con);

?>
</html>