<?php
include_once __DIR__ . '/../models/Student.php';

class StudentController {
    private $student;

    public function __construct() {
        $this->student = new Student();
    }

    public function add($data) {
        return $this->student->create($data['name'], $data['email'], $data['dept']);
    }

    public function list() {
        return $this->student->read();
    }

    public function update($data) {
        return $this->student->update($data['id'], $data['name'], $data['email'], $data['dept']);
    }

    public function delete($id) {
        return $this->student->delete($id);
    }
}
?>