<?php
include 'controllers/StudentController.php';
$controller = new StudentController();

$action = $_GET['action'] ?? '';

if ($action == 'add' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->add($_POST);
    header("Location: index.php");
}
elseif ($action == 'update' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->update($_POST);
    header("Location: index.php");
}
elseif ($action == 'delete' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->delete($_POST['id']);
    header("Location: index.php");
}

// Include views
include 'views/add.php';
include 'views/list.php';
include 'views/update.php';
include 'views/delete.php';