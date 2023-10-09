<?php

require_once 'animal.php';

class Ave extends Animal
{

    private $corPena;

    public function locomover()
    {
        echo 'VOANDO';
    }


    public function alimentar()
    {
        echo 'COMENDO FRUTAS';
    }

    public function emitirSom()
    {
        echo 'SOM DE AVE';
    }

    public function fazerNinho()
    {
        echo 'construiu um ninho';
    }

	public function getCorPena() {
		return $this->corPena;
	}

	public function setCorPena($value) {
		$this->corPena = $value;
	}
}