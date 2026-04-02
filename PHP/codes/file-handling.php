<!DOCTYPE html>
<html>
<head>
    <title>PHP File Handling Demo</title>
</head>
<body>

<h2>PHP File Handling Activities</h2>

<?php

$filename = "demo.txt";

// 1. Create and Write to File
echo "<h3>1. Creating and Writing to File:</h3>";
$file = fopen($filename, "w"); // "w" mode creates file
if ($file) {
    fwrite($file, "Hello, this is the first line.\n");
    fwrite($file, "This is the second line.\n");
    fclose($file);
    echo "File created and data written successfully.<br>";
} else {
    echo "Error creating file.<br>";
}

// 2. Read File Content
echo "<h3>2. Reading File:</h3>";
$file = fopen($filename, "r");
if ($file) {
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
} else {
    echo "Error reading file.<br>";
}

// 3. Append Data to File
echo "<h3>3. Appending Data:</h3>";
$file = fopen($filename, "a"); // "a" mode appends
if ($file) {
    fwrite($file, "This line is appended later.\n");
    fclose($file);
    echo "Data appended successfully.<br>";
} else {
    echo "Error appending data.<br>";
}

// 4. Read Updated File Content
echo "<h3>4. Reading Updated File:</h3>";
echo nl2br(file_get_contents($filename));

// 5. Check File Exists
echo "<h3>5. Checking File Existence:</h3>";
if (file_exists($filename)) {
    echo "File exists.<br>";
} else {
    echo "File does not exist.<br>";
}

// 6. Get File Size
echo "<h3>6. File Size:</h3>";
echo "File size: " . filesize($filename) . " bytes<br>";

// 7. Delete File
echo "<h3>7. Deleting File:</h3>";
if (unlink($filename)) {
    echo "File deleted successfully.<br>";
} else {
    echo "Error deleting file.<br>";
}

?>

</body>
</html>