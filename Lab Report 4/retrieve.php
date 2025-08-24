<?php
include 'db_connect.php';

$sql = "SELECT * FROM user_info";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h2 class="mb-0">Student Records</h2>
        </div>
        <div class="card-body">
            <?php
            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table table-striped table-bordered'>";
                echo "<thead class='table-dark'>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                        </tr>
                      </thead>
                      <tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['dept']."</td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-warning'>No records found.</div>";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>