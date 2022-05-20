<?php

require_once '../DB.php';   

 abstract class crudCarro extends DB {   
    
    protected $tabela;
    public $modelo;
    public $marca;
    public $ano;
    public $nroPortas;
    public $cor;
    public $valorDiaria;
   
    
    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function getMarca() {
        return $this->marca;
    }
    
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    public function getModelo() {
        return $this->modelo;
    }
    
    public function setAno($ano) {
        $this->ano = $ano;
    }
    public function getAno() {
        return $this->ano;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }
    public function getCor() {
        return $this->cor;
    }

    public function setNroPortas($nroPortas) {
        $this->nroPortas = $nroPortas;
    }
    public function getNroPortas() {
        return $this->nroPortas;
    }

    public function setValorDiaria($valorDiaria) {
        $this->valorDiaria = $valorDiaria;
    }
    public function getValorDiaria() {
        return $this->valorDiaria;
    }

   
}