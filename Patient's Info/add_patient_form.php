<!DOCTYPE html>
<html>
<head>
    <title>Patient Tracker - Add Patient</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="add_patient.php" method="post">
            <h2>Add Patient</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="condition">Condition:</label>
                <input type="text" id="condition" name="patient_condition" required>
            </div>
            <div class="form-group">
                <label for="room">Room:</label>
                <input type="text" id="room" name="room" required>
            </div>
            <div class="form-group">
                <label for="doctor">Attending Doctor:</label>
                <select id="doctor" name="doctor" required>
                    <option value="">Select Doctor</option>
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

                    // Display doctor options
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['doctor_id']}'>{$row['name']} ({$row['specialization']})</option>";
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="notes">Notes:</label>
                <textarea id="notes" name="notes"></textarea>
            </div>
            <button type="submit">Add Patient</button>
        </form>
    </div>
</body>
</html>
