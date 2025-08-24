<?php
include "db_connect.php";

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Retrieve Users</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: #f4f6f8;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            padding: 32px 24px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 18px;
        }
        th, td {
            padding: 12px 8px;
            text-align: left;
        }
        th {
            background: #007bff;
            color: #fff;
            border: none;
        }
        tr:nth-child(even) {
            background: #f0f4fa;
        }
        tr:hover {
            background: #e2e6ea;
        }
        a {
            display: inline-block;
            padding: 8px 16px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background 0.2s;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Users List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["name"]."</td>
                            <td>".$row["email"]."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No results found</td></tr>";
            }
            $conn->close();
            ?>
        </table>
        <a href="insert.php">Insert New User</a>
    </div>
</body>
</html>