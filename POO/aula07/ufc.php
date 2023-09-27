<?php 

require_once 'interface.php';

class Lutador implements ControleLutador {

    //atributo
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    //metodos
    public function apresentar(){


    }

    public function status(){

        
    }

    public function ganharLuta(){

        
    }

    public function perderLuta(){

        
    }

    public function empatarLuta(){

        
    }
    

    //metodos especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->peso = $pe;
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    ////////// getters /////////
    public function getNome(){
        return $this->nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    ////////// setters /////////
    public function setNome($nome) {
        $this->nome = $nome;
    }


    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }


    public function setIdade($idade) {
        $this->idade = $idade;
    }


    public function setAltura($altura) {
        $this->altura = $altura;
    }


    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }


    public function setCategoria() {
        
        if ($this->getpeso()<52.2) {
            $this->categoria = "Inválido";
        } else if ($this->getpeso()<=70.3) {
            $this->categoria = "Leve";
        } else if ($this->getpeso()<=83.9){
            $this->categoria = "Médio";
        } else if ($this->getpeso()<=120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }


    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }


    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }


    public function setEmpates($empates) {
        $this->empates = $empates;
    }


}




?>