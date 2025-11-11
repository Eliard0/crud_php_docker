<?php

require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/controllers/teacherController.php';

$controller = new TeacherController($pdo);

$action = $_GET['action'] ?? 'list';

$array_data_url = explode('/', trim($action, '/'));
$action = $array_data_url[0] ?? 'list';
$id = $array_data_url[1] ?? null;

switch($action){
    case 'list':
        $controller->teacherList();
        break;

    case 'create':
        $controller->createTeacher();
        break;

    case 'store':
        $controller->storeTeacher();
        break;

    case 'edit':
        $id = $_GET['id'] = $id;
        $controller->editTeacher($id);
        break;

    case 'update':
        $controller->updateTeacher();
        break;

    case 'delete':
        $controller->deleteTeacher();
        break;

    default:
        http_response_code(404);
        echo "Pagina não encontrada";
        break;
}

// if ($action == 'list') {
//     $controller->teacherList();
// } else if ($action == 'create') {
//     $controller->createTeacher();
// } else if ($action == 'store') {
//     $controller->storeTeacher();
// }else if ($action == 'edit') {
//     $controller->editTeacher();
// }else if ($action == 'update') {
//     $controller->updateTeacher();
// }else if ($action == 'delete') {
//     $controller->deleteTeacher();
// }
