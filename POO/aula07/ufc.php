<?php 

require_once 'interface.php';

class Lutador implements ControleLutador {

    //atributo
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    //metodos
    public function apresentar(){
        echo "<p>--------------------------------------------</p>";
        echo "<p>CHEGOU A HORA DO LUTADOR: " . $this->getNome(). "!!!";
        echo " Veio diretamente de: " . $this->getNacionalidade();
        echo ". Tem " . $this->getIdade() . " Anos, " . " e tem " . $this->getAltura() . " m de Altura.";
        echo " Pesando: " . $this->getPeso() . " Kg. ";
        echo "<br>Ele tem: " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas ";
        echo " e empatou: " . $this->getEmpates() . " vezes.</p>";  
        echo "<p>--------------------------------------------</p><br>";  
         

    }

    public function status(){
        echo "<p>--------------------------------------------</p>";
        echo "<p>Lutador: " . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " E já ganhou " . $this->getVitorias() . " vezes, perdeu " .  $this->getDerrotas() . " vezes, e empatou " .$this->getEmpates() . " vezes! </p>";
        echo "<p>--------------------------------------------</p><br>";

        
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
        
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
        
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
        
    }
    

    //metodos especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
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

    public function getAltura(){
        return $this->altura;
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
        
        if ($this->peso <52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso<=70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso<=83.9){
            $this->categoria = "Médio";
        } elseif ($this->peso<=120.2){
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


