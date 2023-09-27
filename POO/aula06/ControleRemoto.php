<?php

require_once 'controlador.php';

class ControleRemoto implements Controlador { //INICIO CLASSE

    //atributos
    private $volume;
    private $ligado;
    private $tocando;

    //metodos especiais
    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
        
    }
//////////////////////////////////////////
////////// GETTERS AND SETTERS //////////

    private function getVolume() {
        return $this->volume;

    }

    private function setVolume($volume) {

        $this->volume = $volume;

    }


/////////////////////////////////////////

    private function getLigado() {
        return $this->ligado;

    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;

    }

/////////////////////////////////////////

private function getTocando() {
    return $this->tocando;

}

private function setTocando($tocando) {
    $this->tocando = $tocando;

}

/////////FIM METODOS ESPECIAIS///////////

///////// METODOS ABSTRATOS /////////////


public function ligar() {

    $this->setLigado(true);
}


public function desligar() {

    $this->setLigado(false);

}


public function abrirMenu() {
    echo "<p>------ MENU --------</p>";
    if ($this->getLigado()){
        
        echo "Está Ligado? SIM!<br>";
    } else {
        echo "Está Ligado? NÃO!<br>";
    }
    if ($this->getTocando()) {
        echo "Está tocando? SIM!<br>";
    } else {
        echo "Está tocando? NÃO!<br>";
    }


    echo "Volume? : ". $this->getVolume() . " ";

    for ($i=0; $i <= $this->getVolume(); $i+=10) {
        echo "|";
    }

    echo "<br>";
    echo "<p>--------------------</p>";
    
}


public function fecharMenu() {

    echo "<br>Fechar Menu!";

}


public function maisVolume() {

    if ($this->getLigado()) {
        $this->setVolume($this->getVolume() + 5);

    } else {
        echo "<p>Falha ao aumentar volume! Não está ligado!</p>";
    }

}


public function menosVolume() {
    if ($this->getLigado()) {
        $this->setVolume($this->getVolume() - 5);

    }  else {
        echo "<p>Falha ao diminuir volume! Não está ligado!</p>";
    }

}


public function ligarMudo(){
    if ($this->getLigado() && $this->getVolume() > 0) {
        $this->setVolume(0);

    } else {
        echo "<p>Falha ao ligar mudo! Não está ligado ou já está no mudo!</p>";
    }

}


public function desligarMudo() {
    if ($this->getLigado() && $this->getVolume() == 0) {
        $this->setVolume(50);

    } else {
        echo "<p>Falha ao desligar mudo! Não está ligado ou mudo já está desligado!</p>";
    }


}


public function play() {
    if  ($this->getLigado() && !($this->getTocando())) {
        $this->setTocando(true);

    } else {
        echo "<p>Falha ao dar play! Não está Ligado ou já esta tocando!</p>";
    }

}


public function pause() {
    if  ($this->getLigado() && $this->getTocando()) {
        $this->setTocando(false);

    } else {
        echo "<p>Falha ao dar pause! Não está Ligado ou já esta pausado!</p>";
    }
}



} //FIM CLASSE













?>