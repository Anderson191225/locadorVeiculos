<?php



require_once 'CrudUsuario.php';

 class Usuario extends CrudUsuario {
    
    protected $tabela = 'usuario';  
      
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (nome, cpf, telefone, funcionario, data_nascimento, cidade, bairro, rua, numero, email, senha) VALUES (:nome, :cpf, :telefone, :opcao, :data_nascimento, :cidade, :bairro, :rua, :numero, :email, :senha)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':cpf', $this->cpf);
        $stm->bindParam(':telefone', $this->telefone);
        $stm->bindParam(':opcao', $this->opcao);
        $stm->bindParam(':data_nascimento', $this->data_nascimento);
        $stm->bindParam(':cidade', $this->cidade);
        $stm->bindParam(':bairro', $this->bairro);
        $stm->bindParam(':rua', $this->rua);
        $stm->bindParam(':numero', $this->numero);
        $stm->bindParam(':email', $this->email);
        $stm->bindParam(':senha', $this->senha);
       
        return $stm->execute();
    }
    
  
    
}
