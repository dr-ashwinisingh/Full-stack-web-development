<?php
include 'db.php';


$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

//$name = "Ashwini";
//$email = "ashwini@gmail.com";
//$age = 22;

$sql = "INSERT INTO students (name, email, age)
        VALUES ('$name', '$email', $age)";

if ($conn->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $conn->error;
}
?>