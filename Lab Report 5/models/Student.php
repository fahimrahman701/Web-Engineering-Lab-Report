<?php
include_once __DIR__ . '/../config/db.php';

class Student {
    private $conn;
    private $table = "students"; // Use the new table name

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conn;
    }

    // Create
    public function create($name, $email, $dept) {
        $sql = "INSERT INTO $this->table (name, email, dept) VALUES ('$name','$email','$dept')";
        return $this->conn->query($sql);
    }

    // Read
    public function read() {
        $sql = "SELECT * FROM $this->table";
        return $this->conn->query($sql);
    }

    // Update
    public function update($id, $name, $email, $dept) {
        $sql = "UPDATE $this->table SET name='$name', email='$email', dept='$dept' WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Delete
    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id=$id";
        return $this->conn->query($sql);
    }
}
?>