<?php



require_once 'crudCarro.php';

 class Carro extends crudCarro {
    
    protected $tabela = 'carro';  

      
 
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
        $sql = "INSERT INTO $this->tabela (modelo, marca, ano, cor, nroPortas, valorDiaria) VALUES (:modelo, :marca, :ano, :cor, :nro_portas, :valor_diaria)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':modelo', $this->modelo);
        $stm->bindParam(':marca', $this->marca);
        $stm->bindParam(':ano', $this->ano);
        $stm->bindParam(':cor', $this->cor);
        $stm->bindParam(':nroPortas', $this->nroPortas);
        $stm->bindParam(':valorDiaria', $this->valorDiaria);
        return $stm->execute();
    }
    
  
    
}