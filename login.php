<?php
session_start();

// Check if the user is already logged in. If yes, redirect to the dashboard page.
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Replace the database connection details with your own
    $conn = mysqli_connect('localhost', 'root', '', 'patient_tracker');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Replace the hashed password with the actual hashed password for 'alice'
    $hashed_password = '$2y$10$OYodnFjQGOsTf/e.MdRVfO8yZec/r0zGtvFxxXpE9zgtXeFqxuJQO';

    if ($username === 'alice' && password_verify($password, $hashed_password)) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid login credentials
        $error = "Invalid username or password.";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Tracker - Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <?php if (isset($error)) { ?>
                <div class="error"><?php echo $error; ?></div>
            <?php } ?>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
