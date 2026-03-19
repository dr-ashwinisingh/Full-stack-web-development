<html>
<body>

<form method="post">
    Enter Name: <input type="text" name="username">
    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["username"];
    echo "Welcome, " . $name;
}
?>

</body>
</html>