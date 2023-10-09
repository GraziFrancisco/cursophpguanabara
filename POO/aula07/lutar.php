<?php 

require_once 'interface.php';
require_once 'ufc.php';


///////////////////////////////////////////////////////////////////////////

class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    // setters //
    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
        
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;  
    }


    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;  
    }


    // getters //
    public function getDesafiado(){
        return $this->desafiado;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }


    public function getRounds(){
        return $this->rounds;
    }


    public function getAprovada(){

        return $this->aprovada;
    }


    //metodos

        //so pode mesma categoria
        //somente podem ser lutadores diferentes
        //so acontecer se estiver aprovada
        //so pode ter como resultado vitoria de um ou empate


    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
        

    }

    public function lutar(){
       

        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = random_int(0, 2);
            switch ($vencedor) {
                case 0: //empate

                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();

                    break;

                case 1: //desafiado vence

                    echo "<p>" . $this->desafiado->getNome() . " Venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();

                    break;

                case 2: // desafiante vence

                    echo "<p>" . $this->desafiante->getNome() . " Venceu!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();

                    break;
                } 
        } else {
            echo "<p>Luta não pode acontecer!</p>";

        }
    }
}        