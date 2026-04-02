<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] .
             " Name: " . $row["name"] .
             " Email: " . $row["email"] .
             " Age: " . $row["age"] . "<br>";
    }
} else {
    echo "No records found";
}
?>