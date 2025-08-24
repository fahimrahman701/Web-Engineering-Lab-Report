<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM user_info WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success mt-3'>Record deleted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-danger text-white">
                    <h2 class="mb-0">Delete Student Record</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" name="id" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>