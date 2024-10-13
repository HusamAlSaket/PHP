<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_user'])) {

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = password_hash(filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS), PASSWORD_DEFAULT);


    if (empty($name) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {

        $sql = "INSERT INTO lists (name, email, password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "You are now registered";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Welcome to the Dashboard</h1>

    <form method="post" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" name="add_user" class="btn btn-primary">Add User</button>
    </form>
</body>
</html>
