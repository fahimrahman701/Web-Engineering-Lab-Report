<?php
$servername = "localhost";
$username = "root";    // default XAMPP username
$password = "";        // default XAMPP password
$dbname = "user_info"; // your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>