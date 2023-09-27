<?php 

class Caneta {

    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    public function rabiscar () {
        if ($this->tampada) {
            echo "<p> Não posso rabiscar! Caneta está tampada! </p>";

        } else {
            echo "<p>Estou rabiscando</p>";

        }
        

    }


    public function tampar () {
        $this->tampada = true;
        
    }


    public function destampar () {
        $this->tampada = false;
        
    }

    
}


?>