<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once '../DB.php';    //inclui arquivo DB

 abstract class crudMarca extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $nome;
   
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    
   
}