<!DOCTYPE html>
<html>
<head>
    <title>PHP Variable Types</title>
</head>
<body>

<h2>PHP Variable Types Demonstration</h2>

<?php

// 1. String
$name = "Ashwini";
echo "<h3>1. String</h3>";
echo "Name: " . $name . "<br>";

// 2. Integer
$age = 22;
echo "<h3>2. Integer</h3>";
echo "Age: " . $age . "<br>";

// 3. Float (Double)
$price = 99.99;
echo "<h3>3. Float</h3>";
echo "Price: " . $price . "<br>";

// 4. Boolean
$isStudent = true;
echo "<h3>4. Boolean</h3>";
echo "Is Student: " . $isStudent . "<br>"; // true = 1, false = empty

// 5. Array
$colors = array("Red", "Green", "Blue");
echo "<h3>5. Array</h3>";
echo "First Color: " . $colors[0] . "<br>";

// 6. Object
class Student {
    public $name;
    public $age;
}

$stu = new Student();
$stu->name = "Rahul";
$stu->age = 20;

echo "<h3>6. Object</h3>";
echo "Student Name: " . $stu->name . "<br>";
echo "Student Age: " . $stu->age . "<br>";

// 7. NULL
$var = NULL;
echo "<h3>7. NULL</h3>";
echo "Value of var: ";
var_dump($var); // shows NULL

?>

</body>
</html>