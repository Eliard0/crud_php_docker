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

        public function create($name, $materia){
            $smt = $this->pdo->prepare("INSERT INTO professores (nome, materia) VALUES (?,?)");
            
            return $smt->execute([$name, $materia]);
        }

        public function getId($id){
            $smt = $this->pdo->prepare("SELECT * FROM professores WHERE id = ?");
            
            $smt->execute([$id]);

            return $smt->fetch(PDO::FETCH_ASSOC);
        }

        public function update($id, $name, $materia){
            $smt = $this->pdo->prepare("UPDATE professores SET nome = ?, materia = ? WHERE id = ?");

            return $smt->execute([$name, $materia, $id]);
        }

        public function delete($id){
            $smt = $this->pdo->prepare("DELETE FROM professores WHERE id = ?");

            return $smt->execute([$id]);
        }
    }

?>