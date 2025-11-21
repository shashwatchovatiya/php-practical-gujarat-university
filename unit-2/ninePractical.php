<?php
// Create an associative array
$student = array(
    "id" => 101,
    "name" => "Rahul Sharma",
    "course" => "BCA",
    "age" => 20,
    "city" => "Ahmedabad"
);

// Display array elements using foreach
echo "<h3>Student Details:</h3>";
foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

// For debugging: display full array
echo "<br><strong>Full Array:</strong><br>";
print_r($student);
?>

<!-- output -->

<!-- Student Details:
id : 101
name : Rahul Sharma
course : BCA
age : 20
city : Ahmedabad

Full Array:
Array ( [id] => 101 [name] => Rahul Sharma [course] => BCA [age] => 20 [city] => Ahmedabad )
 -->