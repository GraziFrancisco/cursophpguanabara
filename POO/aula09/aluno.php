<?php 

require_once 'pessoa.php';

class Aluno extends Pessoa {
    private $matr;
    private $curso;



//////////////////////////////////////////
//////////// METODOS ////////////////////
    public function cancelarMatr(){
        echo '<p>Matricula Cancelada com Sucesso!</p>';

}
//////////////////////////////////////////
//////////// setter and getters///////////
    public function getMatr(){
        return $this->matr;
}   

    public function getCurso(){
        return $this->matr;
} 

    public function setMatr($matr){
        $this->matr = $matr;
}

    public function setCurso($curso){
        $this->curso = $curso;
}


}













?>