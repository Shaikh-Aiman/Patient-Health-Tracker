<!DOCTYPE html>
<html>
<head>
    <title>Patient Tracker - Doctor List</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="doctor-list">
        <h2>Doctor List</h2>
        <ul>
            <?php
            // Database connection
            $conn = mysqli_connect('localhost', 'root', '', 'patient_tracker');

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Fetch doctors from database
            $query = "SELECT * FROM doctors";
            $result = mysqli_query($conn, $query);

            // Display doctor list
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>{$row['name']} - Specialization: {$row['specialization']}</li>";
            }

            // Close connection
            mysqli_close($conn);
            ?>
        </ul>
    </div>
</body>
</html>
