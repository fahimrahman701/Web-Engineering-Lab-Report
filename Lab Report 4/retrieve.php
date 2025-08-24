<?php
$conn = new mysqli("localhost", "root", "", "informationdb");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$sql = "SELECT id, name, email, created_at FROM users";
$result = $conn->query($sql);
?>

<table border="1" cellpadding="10">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Created At</th></tr>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['created_at']."</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}
$conn->close();
?>
</table>

<p><a href="insert.php">Add New Student</a></p>