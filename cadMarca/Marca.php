<?php



require_once 'crudMarca.php';

 class Marca extends crudMarca {
    
    protected $tabela = 'marca';  

      
 
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
  
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
  
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome) VALUES (:nome)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        return $stm->execute();
    }
    
  
    
}
