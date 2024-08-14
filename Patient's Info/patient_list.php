<!DOCTYPE html>
<html>
<head>
    <title>Patient Tracker - Patient List</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="patient-list">
        <h2>Patient List</h2>
        <ul>
            <?php
            // Database connection
            $conn = mysqli_connect('localhost', 'root', '', 'patient_tracker');

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch patients from database
            $query = "SELECT patients.*, doctors.name AS doctor_name FROM patients LEFT JOIN doctors ON patients.doctor_id = doctors.doctor_id";
            $result = mysqli_query($conn, $query);

            // Display patient list
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>{$row['name']} (Age: {$row['age']}) - Condition: {$row['patient_condition']} - Room: {$row['room']} - Attending Doctor: {$row['doctor_name']}</li>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </ul>
    </div>
</body>
</html>
