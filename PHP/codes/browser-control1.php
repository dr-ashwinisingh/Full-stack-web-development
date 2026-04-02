<!DOCTYPE html>
<html>
<head>
    <title>Browser Detection in PHP</title>
</head>
<body>

<h2>Browser Detection and Control using PHP</h2>

<?php
// Get browser information
$browser = $_SERVER['HTTP_USER_AGENT'];

echo "<h3>1. Browser Information:</h3>";
echo "User Agent: " . $browser . "<br><br>";

// Detect browser type
echo "<h3>2. Browser Detection:</h3>";

if (strpos($browser, 'Chrome') !== false) {
    echo "You are using Google Chrome.<br>";
} elseif (strpos($browser, 'Firefox') !== false) {
    echo "You are using Mozilla Firefox.<br>";
} elseif (strpos($browser, 'Safari') !== false) {
    echo "You are using Safari.<br>";
} elseif (strpos($browser, 'Edge') !== false) {
    echo "You are using Microsoft Edge.<br>";
} else {
    echo "Browser not identified.<br>";
}

// Detect operating system
echo "<h3>3. Operating System Detection:</h3>";

if (strpos($browser, 'Windows') !== false) {
    echo "Operating System: Windows<br>";
} elseif (strpos($browser, 'Mac') !== false) {
    echo "Operating System: macOS<br>";
} elseif (strpos($browser, 'Linux') !== false) {
    echo "Operating System: Linux<br>";
} else {
    echo "Operating System not identified<br>";
}

// Browser control example: Redirect (uncomment to use)
// header("Location: https://www.google.com");

// Browser control example: Set content type
// header("Content-Type: text/html");

// Browser control example: Prevent caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

echo "<h3>4. Browser Control:</h3>";
echo "Cache has been disabled for this page.<br>";

?>

</body>
</html>