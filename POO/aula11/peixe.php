<?php

require_once 'animal.php';

class Peixe extends Animal
{

    private $corEscama;

    public function locomover()
    {
        echo 'NADANDO';
    }


    public function alimentar()
    {
        echo 'COMENDO SUBSTANCIAS';
    }

    public function emitirSom()
    {
        echo 'PEIXE NAO FAZ SOM';
    }

    public function soltarBolha()
    {
        echo 'SOLTOU UMA BOLHA';
    }

	public function getCorEscama() {
		return $this->corEscama;
	}

	public function setCorEscama($value) {
		$this->corEscama = $value;
	}
}