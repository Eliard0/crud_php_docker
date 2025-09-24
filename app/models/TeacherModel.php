<?php 

    class TeacherModel {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
         }

        public function getAll(){
            $smt = $this->pdo->prepare("SELECT * FROM professores ORDER BY nome ASC");
            $smt->execute();

            return $smt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>