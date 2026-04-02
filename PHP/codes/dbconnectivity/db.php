<?php
$host = "localhost";
$user = "root";
$password = "root";
$dbname = "student_db";

// Using port 8889 (MAMP default)
$conn = new mysqli($host, $user, $password, $dbname, 8889);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>