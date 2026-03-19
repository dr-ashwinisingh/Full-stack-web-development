<?php

// 1. Integer Variable
$number = 50;
echo "<h3>Integer Variable</h3>";
echo "Value: $number <br>";
var_dump($number);
echo "<br><br>";

// 2. Float (Decimal) Variable
$decimal = 45.75;
echo "<h3>Float Variable</h3>";
echo "Value: $decimal <br>";
var_dump($decimal);
echo "<br><br>";

// 3. String Variable
$text = "Hello PHP Programming";
echo "<h3>String Variable</h3>";
echo "Value: $text <br>";
var_dump($text);
echo "<br><br>";

// 4. Boolean Variable
$status = true;
echo "<h3>Boolean Variable</h3>";
echo "Value: $status <br>";
var_dump($status);
echo "<br><br>";

// 5. Array Variable
$colors = array("Red", "Green", "Blue");
echo "<h3>Array Variable</h3>";
print_r($colors);
echo "<br>";
var_dump($colors);
echo "<br><br>";

// 6. NULL Variable
$data = NULL;
echo "<h3>NULL Variable</h3>";
var_dump($data);

?>