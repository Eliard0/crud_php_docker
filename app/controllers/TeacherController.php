<?php

require_once __DIR__ . '/../models/teacherModel.php';

class TeacherController
{
    private $model;

    public function __construct(private $pdo)
    {
        $this->model = new TeacherModel($this->pdo);
    }

    public function teacherList()
    {
        $teachers = $this->model->getAll();

        require __DIR__ . '/../views/index.php';
    }


    public function createTeacher()
    {

        require __DIR__ . '/../views/create.php';
    }


    public function storeTeacher()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST['name'] ?? '';
            $materia = $_POST['materia'] ?? '';

            $this->model->create($name, $materia);

            header('Location:index.php');
            exit;
        }
    }

    public function editTeacher()
    {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $teacher = $this->model->getId($id);
            if ($teacher) {
                require __DIR__ . '/../views/create.php';

                return;
            }
        }

        header('Location:index.php');
        exit;
    }

    public function updateTeacher()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $id = $_POST['id'] ?? null;
            $name = $_POST['name'] ?? '';
            $materia = $_POST['materia'] ?? '';

            if ($id) {
                $this->model->update($id, $name, $materia);
            }

            header('Location:index.php');
            exit;
        }
    }

    public function deleteTeacher(){
        $id = $_POST['id'] ?? null;

        if($id){
            $this->model->delete($id);
        }

        header('Location:index.php');
        exit;
    }
}
