<?php 

require_once 'pessoa.php';

class Professor extends Pessoa {

    private $especialidade;
    private $salario;

//////////////////////////////////////////
//////////// METODOS ////////////////////
public function receberAum($aum){
    $this->salario += $aum;

}
//////////////////////////////////////////
//////////// setter and getters///////////
public function getEspecialidade(){
    return $this->especialidade;
}


public function getSalario(){
    return $this->salario;
}


public function setEspecialidade($especialidade){
    $this->especialidade = $especialidade;
}

public function setSalario($salario){
    $this->salario = $salario;
}


}
















?>