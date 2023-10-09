<?php 
require_once "aluno.php";

class Bolsista extends Aluno {

    private $bolsa;
   

    ////

    public function renovarBolsa(){
        echo '<p> Bolsa renovada </p>';

    }


    public function pagarMensalidade(){
        echo "<p>". $this->getNome() . " é bolsista, então paga com desconto!</p>";
        
    }


}
