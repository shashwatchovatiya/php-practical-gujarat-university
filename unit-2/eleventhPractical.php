<?php
// Create associative array
$student = array(
    "id" => 101,
    "name" => "Amit Kumar",
    "course" => "BCA",
    "age" => 20,
    "city" => "Surat"
);

echo "<h1>Student information in simple format</h1>";

foreach($student as $key){
    echo $key;
    echo "<br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";


// Access array elements using keys
echo "<h3>Student Details:</h3>";
echo "ID: " . $student["id"] . "<br>";
echo "Name: " . $student["name"] . "<br>";
echo "Course: " . $student["course"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "City: " . $student["city"] . "<br>";
?>
