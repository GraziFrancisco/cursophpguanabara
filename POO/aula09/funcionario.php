<?php 

require_once 'pessoa.php';


class Funcionario extends Pessoa {

    private $setor;
    private $trabalhando;

//////////////////////////////////////////
//////////// METODOS ////////////////////
public function mudarTrabalho(){
    $this->trabalhando =  ! $this->trabalhando;

}
//////////////////////////////////////////
//////////// setter and getters///////////
public function getSetor(){
    return $this->setor;
}


public function getTrabalhando(){
    return $this->trabalhando;
}


public function setSetor($setor){
    $this->setor = $setor;
}

public function setTrabalhando($trabalhando){
    $this->trabalhando = $trabalhando;
}


}













?>