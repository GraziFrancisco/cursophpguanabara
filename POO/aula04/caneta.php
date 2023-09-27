<?php 

class Caneta {

    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;


    public function __construct($m, $c, $p)
   
    {
        $this->cor = $c;
        $this->tampar();
        $this->modelo = $m;
        $this->ponta = $p;
    }

    public function tampar () {
        $this->tampada = true;

    }


    public function getModelo () {
        return $this->modelo;
        
    }


    public function setModelo ($m) {
        $this->modelo = $m;

        
    }

    public function getPonta () {
        return $this->ponta;
        
    }


    public function setPonta ($p) {
        $this->ponta = $p;

        
    }
    
}


?>