<!----<html>
    
    <body>
        <form method="post" action=''>
            Enter one number :-
            <input name="values" type="number">
			
			<input type="submit" value="submit number">
        </form>
    </body>    

</html>

<?php
// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message

if(isset($_POST["values"])){
	$val = $_POST['values'];
	
	$num = $val;

	$a =0 ;
	$b = 1;


	for($i= 0;$i<$num;$i++){
		echo $a.' ';
		$c = $a + $b;
		$a= $b;
		$b =$c;
	}

}
?>

--->


<!-----	<html>
		<body>
			<form method="POST">
				<input type="radio" name="bg_color" value="red"> Red
				<input type="radio" name="bg_color" value="blue"> Blue
				<input type="radio" name="bg_color" value="yellow"> Yellow
				<input type="radio" name="bg_color" value="green"> Green

				<input type="submit" value="Choose color"/>
			</form>
		</body>

		<?php
		if (isset($_POST['bg_color'])) {
			$bg_value = $_POST['bg_color'];
			$color = $bg_value;

			switch ($color) {
				case 'red':
					echo '<body bgcolor="red"></body>';
					echo "Background color was red";
					break;

				case 'blue':
					echo '<body bgcolor="blue"></body>';
					echo "Background color was blue";
					break;

				case 'yellow':
					echo '<body bgcolor="yellow"></body>';
					echo "Background color was yellow";
					break;

				case 'green':
					echo '<body bgcolor="green"></body>';
					echo "Background color was green";
					break;

				default:
					echo "<body></body>";
					echo "No color matched";
			}
		}
		?>
	</html>
--->


<!---<html>
	<body>
		<form method="POST">
			Enter the first number  
			<input type ="number" name="number1"/>
			
			<br><br>Enter Second number  
			<input type ="number" name="number2"/>
			
			<input type="submit" value="submit" />
		</form>
	</body>
	
	
	<?php
	
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$num1 = $_POST['number1'];
				$num2 = $_POST['number2'];
				
				
				if($num1 > $num2){
					echo $num1."This is number are bigger";
				}else if($num2 > $num1){
					echo $num2."This is number is bigger";
				}else{
					echo "Both are equal";
				}
				
			}
	
	
	
	
	?>
	
	
</html> --->


<!----<html>

	<body>
		<form method="POST">
		
			Enter the number that term to show fibonaci series
			<input name="num" type="number" />
			
			<input type="submit" />
		</formop>
	</body>

	
	<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$number =  $_POST['num'];
			
			$a= 0;
			$b = 1;
			
			for($i = 0 ; $i< $number; $i++){
				echo $a." ";
				$c = $a + $b;
				$a = $b;
				$b = $c;
			}
			
			
			
		}
	
	
	?>
	
</html> -->

<!---<html> 


	<body>
		
		<form method="POST">
			Enter the number 1 : &nbsp;
			<input type="number" name="num1">
			Enter the number 2 : &nbsp;
			<input type="number" name="num2">
		
			<input type="submit" value="Addition" name="op">
			<input type="submit" value="Subtraction" name="op">
			<input type="submit" value="Muliplication" name="op">
			<input type="submit" value="Division" name="op">
		</form>
		
		
		<?php 
			if($_SERVER["REQUEST_METHOD"]== "POST"){
				$a = $_POST['num1'];
				$b = $_POST['num2'];
				$opreation = $_POST['op'];
				
				switch($opreation){
					case 'Addition':
						echo $a.'+'.$b."=".($a+$b);
						break;
					case 'Subtraction':
						echo $a.'-'.$b."=".($a-$b);
						break;
					case 'Muliplication':
						echo $a.'*'.$b."=".($a*$b);
						break;
					case 'Division':
						echo $a.'/'.$b."=".($a/$b);
						break;
				}
				
			}
		
		
		
		?>
		
		
	</body>

</html>--->

<!---

<?php
$cookiesname= "username";
$cookiesvalues= "Welcome ! user";
setcookie("username","Weclome",time()-120);

if(isset($_COOKIE['username'])){
    echo "Cookies value". $cookiesname;
}else{
    echo "Cookies is not set";
}
?>
-->

<!---
<?php
session_start();

$_SESSION["loginid"] = "Shashwat123";

if(isset($_SESSION['loginid'])){
echo "Session Value = ".$_SESSION["loginid"];	
}else{
	echo"session not store";
}


?>

<?php
//session_start();
session_unset();
session_destroy();
echo "Session ended!";
?> -->

<!----
<html>
	<body>
		<form method="POST">
			Enter first value : <input type="text" name="val[]"><br><br>
			Enter second value : <input type="text" name="val[]"><br><br>
			Enter third value : <input type="text" name="val[]"><br><br>
			Enter fourth value : <input type="text" name="val[]"><br><br>
			Enter fifth value : <input type="text" name="val[]"><br><br>
			
			Enter the search element : <input type="text" name="search_val"><br><br>
		
		<input type="submit">
		</form>
		
		
		
		<?php
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$arr = $_POST['val'];
				
				$search = $_POST['search_val'];
				//simple list print
				foreach($arr as $index => $value){
					echo "<li>".$value."<br></li>";
				}
				// finding the minimum and maximium
				$mini = min($arr);
				$max = max($arr);
				
				echo"<br> Minimum number is :"." ".$mini;
				echo"<br> Maximum number is :"." ".$max;
				
				
				// remove the duplicat if user enter in arr
				echo"<br>";
				$uniqueArray = array_unique($arr);
				
				foreach($uniqueArray as $u){
					echo "<li> ". $u ." </li>";
				}
				echo"<BR><br>";
				
				// serach elements
				if(in_array($search,$arr)){
					echo "You are search elemnt is ".$search. " is exist";
				}else{
					echo"not exist";
				}
			}
		
		
		?>
	</body>
</html>
--->





