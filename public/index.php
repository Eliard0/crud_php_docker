<?php

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../app/controllers/teacherController.php';

$controller = new TeacherController($pdo);

$action = $_GET['action'] ?? 'list';

if ($action == 'list') {
    $controller->teacherList();
} else if ($action == 'create') {
    $controller->createTeacher();
} else if ($action == 'store') {
    $controller->storeTeacher();
}else if ($action == 'edit') {
    $controller->editTeacher();
}else if ($action == 'update') {
    $controller->updateTeacher();
}else if ($action == 'delete') {
    $controller->deleteTeacher();
}
