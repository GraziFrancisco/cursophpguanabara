<?php

require_once 'animal.php';

class Mamifero extends Animal
{

    private $corPelo;


    public function locomover()
    {
        echo "CORRENDO";
    }

    public function alimentar()
    {
        echo 'MAMANDO';
    }

    public function emitirSom()
    {
        echo 'SOM DE MAMIFERO';
    }

	public function getCorPelo() {
		return $this->corPelo;
	}

	public function setCorPelo($value) {
		$this->corPelo = $value;
	}
    
}