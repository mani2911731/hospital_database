<?php
include "db.php";

if (!isset($_GET['patient_id'])) {
    echo "No Patient ID received";
    exit;
}

$patient_id = $_GET['patient_id'];

$sql = "SELECT * FROM patients WHERE PATIENT_ID = '$patient_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "<h2 style='text-align:center;'>No patient found</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
            width: 450px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        td:first-child {
            font-weight: bold;
            width: 40%;
        }
    </style>
</head>
<body>

    <div class="container">
    <a href="/hospital/frontend/search.html">← Back to Home</a>
    <h2>Patient Details</h2>
     <table>
        <tr><td>ID</td><td><?php echo $row['PATIENT_ID']; ?></td></tr>
        <tr><td>Name</td><td><?php echo $row['PATIENT_NAME']; ?></td></tr>
        <tr><td>Age</td><td><?php echo $row['AGE']; ?></td></tr>
        <tr><td>Gender</td><td><?php echo $row['GENDER']; ?></td></tr>
        <tr><td>Disease</td><td><?php echo $row['DISEASE']; ?></td></tr>
        <tr><td>Doctor</td><td><?php echo $row['DOCTOR']; ?></td></tr>
        <tr><td>Treatment</td><td><?php echo $row['TREATMENT']; ?></td></tr>
        <tr><td>Cost</td><td><?php echo $row['TREATMENT_COST']; ?></td></tr>
        <tr><td>Admission Date</td><td><?php echo $row['ADMISSION_DATE']; ?></td></tr>
        <tr><td>Discharge Date</td><td><?php echo $row['DISCHARGE_DATE']; ?></td></tr>
</table>
</div>

</body>
</html>