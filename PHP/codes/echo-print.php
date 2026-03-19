<!DOCTYPE html>
<html>
<head>
    <title>Echo vs Print in PHP</title>
</head>
<body>

<h2>Difference between echo and print</h2>

<?php

// Using echo
echo "<h3>Using echo:</h3>";
echo "Hello World using echo<br>";
echo "This ", "is ", "multiple ", "arguments using echo<br>"; // echo supports multiple arguments

// Using print
print "<h3>Using print:</h3>";
print "Hello World using print<br>";

// print does NOT support multiple arguments
// print "Hello", "World";  // ❌ This will cause error

// Demonstrating return value
echo "<h3>Return Value Test:</h3>";

$val1 = print "Print returns value<br>";  // print returns 1
echo "Value returned by print: " . $val1 . "<br>";

// echo does not return value, so cannot assign like this:
// $val2 = echo "Hello"; ❌ error

?>

</body>
</html>