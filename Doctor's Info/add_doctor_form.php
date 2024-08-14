<!DOCTYPE html>
<html>
<head>
    <title>Patient Tracker - Add Doctor</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="form-container">
        <form action="add_doctor.php" method="post">
            <h2>Add Doctor</h2>
            <div class="form-group">
                <label for="doctor-name">Name:</label>
                <input type="text" id="doctor-name" name="doctor_name" required>
            </div>
            <div class="form-group">
                <label for="specialization">Specialization:</label>
                <input type="text" id="specialization" name="specialization" required>
            </div>
            <button type="submit">Add Doctor</button>
        </form>
    </div>
</body>
</html>
