<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "hospital_db"; // ✅ correct database name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
//TEMPORARY:check connection
//echo"Database connected successfully";
?>