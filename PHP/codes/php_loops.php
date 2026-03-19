<?php

echo "<h3>1. For Loop</h3>";
for($i=1; $i<=5; $i++)
{
    echo $i . "<br>";
}

echo "<h3>2. While Loop</h3>";
$j = 1;
while($j <= 5)
{
    echo $j . "<br>";
    $j++;
}

echo "<h3>3. Do While Loop</h3>";
$k = 1;
do
{
    echo $k . "<br>";
    $k++;
} while($k <= 5);

echo "<h3>4. Foreach Loop</h3>";
$numbers = array(10,20,30,40);

foreach($numbers as $num)
{
    echo $num . "<br>";
}

?>