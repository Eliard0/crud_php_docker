<?php 

    require_once __DIR__ . '/../config.php';
    require_once __DIR__ . '/../app/controllers/teacherController.php';

    $controller = new TeacherController($pdo);
    $controller->teacherList();
?>