  <?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'patient_tracker');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$doctorName = $_POST['doctor_name'];
$specialization = $_POST['specialization'];

// Insert new doctor into the database
$query = "INSERT INTO doctors (name, specialization) VALUES ('$doctorName', '$specialization')";
if (mysqli_query($conn, $query)) {
    echo "Doctor added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>