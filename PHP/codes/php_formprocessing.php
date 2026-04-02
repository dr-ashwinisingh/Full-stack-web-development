<?php
session_start();

// Initialize student list
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

// DELETE LOGIC
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    unset($_SESSION['students'][$index]);
    $_SESSION['students'] = array_values($_SESSION['students']); // reindex array
}

// Initialize variables
$name = $email = $age = $gender = $course = "";
$errors = [];

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = $_POST['age'];
    $gender = $_POST['gender'] ?? "";
    $course = $_POST['course'];

    // Validation
    if (empty($name) || !preg_match("/^[a-zA-Z ]*$/", $name)) {
        $errors[] = "Valid name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }

    if (empty($age) || $age < 17 || $age > 30) {
        $errors[] = "Age must be between 17 and 30.";
    }

    if (empty($gender)) {
        $errors[] = "Select gender.";
    }

    if (empty($course)) {
        $errors[] = "Select course.";
    }

    // Store data
    if (empty($errors)) {
        $student = [
            "name" => htmlspecialchars($name),
            "email" => htmlspecialchars($email),
            "age" => $age,
            "gender" => $gender,
            "course" => $course
        ];

        $_SESSION['students'][] = $student;

        // Clear inputs
        $name = $email = $age = $gender = $course = "";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body { font-family: Arial; }
        .error { color: red; }
        table { border-collapse: collapse; margin-top: 20px; }
        table, th, td { border: 1px solid black; padding: 8px; }
        .delete-btn { color: red; text-decoration: none; }
    </style>
</head>
<body>

<h2>Student Registration Form</h2>

<!-- Errors -->
<?php
if (!empty($errors)) {
    echo "<div class='error'><ul>";
    foreach ($errors as $e) {
        echo "<li>$e</li>";
    }
    echo "</ul></div>";
}
?>

<form method="post">
    Name:
    <input type="text" name="name" value="<?php echo $name; ?>" required><br><br>

    Email:
    <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>

    Age:
    <input type="number" name="age" value="<?php echo $age; ?>" min="17" max="30" required><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female<br><br>

    Course:
    <select name="course" required>
        <option value="">--Select--</option>
        <option value="B.Tech" <?php if($course=="B.Tech") echo "selected"; ?>>B.Tech</option>
        <option value="BCA" <?php if($course=="BCA") echo "selected"; ?>>BCA</option>
        <option value="MCA" <?php if($course=="MCA") echo "selected"; ?>>MCA</option>
    </select><br><br>

    <input type="submit" value="Register">
</form>

<h2>Registered Students</h2>

<?php
if (!empty($_SESSION['students'])) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Email</th><th>Age</th><th>Gender</th><th>Course</th><th>Action</th></tr>";

    foreach ($_SESSION['students'] as $index => $s) {
        echo "<tr>";
        echo "<td>{$s['name']}</td>";
        echo "<td>{$s['email']}</td>";
        echo "<td>{$s['age']}</td>";
        echo "<td>{$s['gender']}</td>";
        echo "<td>{$s['course']}</td>";
        echo "<td><a class='delete-btn' href='?delete=$index' onclick='return confirm(\"Delete this student?\")'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No students registered.";
}
?>

</body>
</html>