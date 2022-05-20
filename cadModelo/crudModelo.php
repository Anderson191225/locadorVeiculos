<?php

require_once '../DB.php';   

 abstract class crudModelo extends DB {   
    
    protected $tabela;
    public $nome;
    public $marca;
   
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function getMarca() {
        return $this->marca;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
   
}