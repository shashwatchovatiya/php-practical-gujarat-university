<!-- <?php
$MulƟ = array(
 array(
 array(1,2,3,4),
 array(4,5,6,7),
 array(7,8,9,10)
 )
 );

 for($i = 0; $i < count($MulƟ); $i++){
 for($j = 0; $j <count($MulƟ[$i]);$j++){
 for($k = 0; $k <
count($MulƟ[$i][$j]);$k++){
 echo $MulƟ[$i][$j][$k];
 echo " ";
 }
 echo "<br>";
 }
 }
?> -->
<?php
// Multidimensional array: list of students with details
$students = array(
    array("id" => 101, "name" => "Amit", "course" => "BCA"),
    array("id" => 102, "name" => "Neha", "course" => "MCA"),
    array("id" => 103, "name" => "Raj", "course" => "BBA"),
    array("id" => 104, "name" => "Priya", "course" => "MBA"),
    array("id" => 105, "name" => "Kiran", "course" => "BSc")
);

// Display using foreach
echo "<h3>Student Details (Using Multidimensional Array)</h3>";
foreach ($students as $student) {
    echo "<b style=\"color: red;\">ID: </b>" . $student["id"] . ", ";
    echo "<b style=\"color: red;\">Name: </b>" . $student["name"] . ", ";
    echo "<b style=\"color: red;\">Course: </b>" . $student["course"] . "<br>";
}

// Another example: simple 2D array (matrix)
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "<h3>Matrix (2D Array):</h3>";
echo"<table border='1'>";
for ($i = 0; $i < count($matrix); $i++) {
    echo "<tr>"; // <--- Semicolon added here
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo "<td> " . $matrix[$i][$j] . " </td>" ;
        }
    echo "</tr>";
}
echo"</table>";
?>
