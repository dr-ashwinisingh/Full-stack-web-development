<?php

$number = 15;
$a = 20;
$b = 30;
$day = 3;

// 1. Simple if statement
echo "<h3>1. If Statement</h3>";
if($number > 10)
{
    echo "Number is greater than 10 <br>";
}

// 2. If-Else statement
echo "<h3>2. If-Else Statement</h3>";
if($number % 2 == 0)
{
    echo "Number is Even <br>";
}
else
{
    echo "Number is Odd <br>";
}

// 3. If-Elseif-Else statement
echo "<h3>3. If-Elseif-Else Statement</h3>";
if($number < 10)
{
    echo "Number is less than 10 <br>";
}
elseif($number == 15)
{
    echo "Number is equal to 15 <br>";
}
else
{
    echo "Number is greater than 15 <br>";
}

// 4. Nested If statement
echo "<h3>4. Nested If Statement</h3>";
if($a > $b)
{
    if($a > 0)
    {
        echo "A is greater and positive <br>";
    }
}
else
{
    echo "B is greater than A <br>";
}

// 5. Switch statement
echo "<h3>5. Switch Statement</h3>";

switch($day)
{
    case 1:
        echo "Monday <br>";
        break;

    case 2:
        echo "Tuesday <br>";
        break;

    case 3:
        echo "Wednesday <br>";
        break;

    case 4:
        echo "Thursday <br>";
        break;

    default:
        echo "Invalid Day <br>";
}

?>