<?php
include 'db.php';

$id = 7;
$newName = "Ankit";

$sql = "UPDATE students SET name='$newName' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $conn->error;
}
?>