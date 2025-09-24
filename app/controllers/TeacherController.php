<?php 

    require_once __DIR__ . '/../models/teacherModel.php';

    class TeacherController {
        private $model;

        public function __construct(private $pdo)
        {
            $this->model = new TeacherModel($this->pdo);
        }

        public function teacherList(){
            $teachers = $this->model->getAll();

            require __DIR__ . '/../views/index.php';
        }

    }

?>