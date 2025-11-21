<!----
Create a form containing four input fields(Pro_id, Pro_name,
Pro_price, QOH) and Submit button. When the user clicks on
the submit button, PHP script should be executed which inserts
the record in the product table. 
--->


<html>
	<head> 
		<title>Practical 3 </title>
	
	</head>
	
	<body>
		<form method="post" action="">
			<label>Enter the Product id : </label>
				<input type="number" name="Pro_id"/> <br><br>
			
			<label>Enter the Product name : </label>
			<input type="text" name="Pro_name"/> <br><br>
			
			<label>Enter the Product price: </label>
			<input type="number" name="Pro_price"/> <br><br>
			
			<label>Enter the Product QQH : </label>
			<input type="number" name="Pro_QQH"/> <br><br>
			
			
			<input type="submit"  name="submit" value="Insert Record"> 
		</form>
		
		
		
		
		<?php
		$servername = "localhost";
		$username ="root";
		$password = "";  
		$database = "my_db";
		$con = mysqli_connect($servername,$username,$password,$database);

		if(!$con){
			die("Not connect with DB".mysqli_error());
		}else{
			echo("Success fully connetd with DB");
		}

		if($_SERVER["REQUEST_METHOD"]== "POST"){
			$id = $_POST["Pro_id"];
			$name = $_POST["Pro_name"];
			$price = $_POST["Pro_price"];
			$qqh = $_POST["Pro_QQH"];
			
			
			$sql= "INSERT INTO Product(Pro_id,Pro_name,Pro_price,Qty)
				    values('$id','$name','$price','$qqh')				
				";
				
			 if (mysqli_query($con, $sql)) {
				echo "<br> Record inserted successfully!";
			} else {
				echo "Error: " . mysqli_error($con);
			}
			
			
		}
		
		mysqli_close($con);
		

		?>
	</body>
</html>




