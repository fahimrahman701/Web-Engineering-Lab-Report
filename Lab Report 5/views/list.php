<?php
$result = $controller->list();
?>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f7f7f7;
        margin: 0;
        padding: 0;
    }
    .list-container {
        background: #fff;
        max-width: 700px;
        margin: 40px auto;
        padding: 30px 25px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        padding: 10px 12px;
        border-bottom: 1px solid #eee;
        text-align: left;
    }
    th {
        background: #f0f4f8;
        color: #0078d4;
        font-weight: 600;
    }
    tr:hover {
        background: #f9fafb;
    }
    hr {
        margin-top: 30px;
    }
</style>
<div class="list-container">
    <h2>Student List</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                    </tr>
                </thead>
                <tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['dept']."</td>
                  </tr>";
        }
        echo "  </tbody>
              </table>";
    } else {
        echo "No records found.";
    }
    ?>
</div>
<hr>