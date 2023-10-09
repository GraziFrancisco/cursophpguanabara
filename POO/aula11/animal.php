<?php

abstract class Animal
{

    protected $peso;
    protected $idade;
    protected $membros;

    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();

	public function getPeso() {
		return $this->peso;
	}

	public function setPeso($value) {
		$this->peso = $value;
	}

	public function getIdade() {
		return $this->idade;
	}

	public function setIdade($value) {
		$this->idade = $value;
	}

	public function getMembros() {
		return $this->membros;
	}

	public function setMembros($value) {
		$this->membros = $value;
	}
}