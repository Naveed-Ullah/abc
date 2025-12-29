<!DOCTYPE html>
<html>
<head>
    <title>Form Submitted Data</title>
</head>
<body>

<h2>Submitted User Data</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $gender   = $_POST['gender'];

    echo "<strong>Name:</strong> $name <br>";
    echo "<strong>Email:</strong> $email <br>";
    echo "<strong>Password:</strong> $password <br>";
    echo "<strong>Gender:</strong> $gender <br>";
} else {
    echo "No data received!";
}
?>

</body>
</html>
