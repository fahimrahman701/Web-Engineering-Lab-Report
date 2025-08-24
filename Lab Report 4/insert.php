<?php
$conn = new mysqli("localhost", "root", "", "informationdb");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    if (!empty($name) && !empty($email)) {
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color:green;'>Record added successfully!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
        }
    } else {
        echo "<p style='color:red;'>Name and Email are required!</p>";
    }
}
$conn->close();
?>

<form method="post" action="">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" name="submit" value="Add">
</form>

<p><a href="retrieve.php">View Students</a></p>