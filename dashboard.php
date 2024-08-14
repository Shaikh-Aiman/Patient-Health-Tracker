<?php
// Start the session
session_start();

// Check if the user is logged in. If not, redirect to the login page.
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Tracker - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <div class="options-container">
            <a href="add_doctor_form.php" class="option-doctor">
                <h3>Add Doctor</h3>
            </a>
            <a href="add_patient_form.php" class="option-patient">
                <h3>Add Patient</h3>
            </a>
        </div>
        <div class="show-lists-container">
            <h3>Show Lists</h3>
            <a href="patient_list.php" class="show-patient-list-btn">Show Patient List</a>
            <a href="doctor_list.php" class="show-doctor-list-btn">Show Doctor List</a>
        </div>
    </div>
</body>
</html>

