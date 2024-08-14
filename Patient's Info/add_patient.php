<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'patient_tracker');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$age = $_POST['age'];
$condition = $_POST['patient_condition'];
$room = $_POST['room'];
$doctorId = $_POST['doctor']; // Corrected to 'doctor' from 'doctor_name'
$notes = $_POST['notes'];

// Insert new patient into the database
$query = "INSERT INTO patients (name, age, patient_condition, room, doctor_id, notes) VALUES ('$name', '$age', '$condition', '$room', '$doctorId', '$notes')";
if (mysqli_query($conn, $query)) {
    echo "Patient added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
