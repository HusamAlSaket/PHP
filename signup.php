<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("config.php");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mx-1 mx-md-4">
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                            <input type="text" name="name" class="form-control" required />
                                            <label class="form-label">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" class="form-control" required />
                                            <label class="form-label">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" class="form-control" required />
                                            <label class="form-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>
                                    <a href="./login.php">Login if you made an account already</a>
                                </form>

                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
                                    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
                                    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
                                    
                                    if (empty($name) || empty($email) || empty($password)) {
                                        echo "All fields are required.";
                                    } else {
                                        $hash = password_hash($password, PASSWORD_DEFAULT); 
                                        $sql = "INSERT INTO lists (name, email, password) VALUES ('$name', '$email', '$hash')";

                                        if (mysqli_query($conn, $sql)) {
                                            echo "You are now registered";
                                        } else {
                                            echo "Error: " . mysqli_error($conn);
                                        }
                                    }
                                }
                                mysqli_close($conn);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
