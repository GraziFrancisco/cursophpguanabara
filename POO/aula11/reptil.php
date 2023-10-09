<?php

require_once 'animal.php';

class Reptil extends Animal
{

    private $corEscama;

    public function locomover()
    {
        echo 'RASTEJANDO';
    }

    public function alimentar()
    {
        echo 'COMENDO VEGETAIS';
    }

    public function emitirSom()
    {
        echo 'SOM DE REPTIL';
    }

	public function getCorEscama() {
		return $this->corEscama;
	}

	public function setCorEscama($value) {
		$this->corEscama = $value;
	}
}