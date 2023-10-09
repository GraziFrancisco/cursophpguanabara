<?php 

require_once 'interface.php';
require_once 'pessoa.php';

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

////////////////////////////////////////
/////////// METODOS ///////////////////    

    public function abrir(){
        if (!$this->getAberto()){
            $this->setAberto(true);
            echo "<p>O livro foi aberto com sucesso!</p>";
        } else {
            echo "<p> O livro já está aberto! </p>";
        }

    }

    public function fechar(){
        if ($this->getAberto()){
            $this->setAberto(false);
            echo "<p>O livro foi fechado com sucesso!</p>";
        } else {
            echo "<p> O livro já está fechado! </p>";
        }


    }

    public function folhear(){
        if ($this->getAberto()){
            echo "<p>Livro folheado com sucesso!";
        } else {
            echo "O livro precisa está aberto para folhear!";
        }

    }

    public function avancarPag(){
        if ($this->getAberto()){
            $this->pagAtual = $this->pagAtual + 1;
            echo "<p>A página foi avançada e agora é página: " . $this->getpagAtual() . "</p>";
        } else {
            echo "<p>O livro precisa estar aberto para avançar a página!</p>";
        }

    }

    public function voltarPag(){
        if ($this->getAberto()){
            $this->pagAtual = $this->pagAtual - 1;
            echo "<p>A página foi voltada e agora é página: " . $this->getpagAtual() . "</p>";
        } else {
            echo "<p>O livro precisa estar aberto para avançar a página!</p>";
        }

    }

////////////////////////////////////////
/////////// CONSTRUTOR /////////////////

    public function __construct($titulo, $autor, $totPaginas, $pagAtual, $pessoa)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;  
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $pessoa->getNome();

    }



////////////////////////////////////////   
    //// getters and setters ///
    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getTotPaginas(){
        return $this->totPaginas;
    }

    public function getpagAtual(){
        return $this->pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }
////////////////////////////////////////

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function setAutor($autor){
        $this->titulo = $autor;
    }

    public function setTotPaginas($totPaginas){
        $this->titulo = $totPaginas;
    }

    public function setPagAtual($pagAtual){
        $this->titulo = $pagAtual;
    }

    public function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor){
        $this->titulo = $leitor;
    }

////////////////////////////////////////

public function detalhes(){
    $livro = null;
    if ($this->getAberto()) {
        $livro = "aberto";
    } else {
        $livro = "fechado";
    }

    echo "<p>-----------------------------------------------------------------------</p>";
    echo "<p>O livro selecionado é o <strong>" . $this->titulo . " </strong>do autor: <strong>" . $this->autor . " </strong>tem um total de " . $this->totPaginas . " Páginas,";
    echo " o leitor(a) é <strong>" . $this->leitor . "</strong> e está lendo agora a página " . $this->pagAtual . " e o livro está " . $livro. "! </p>";
    echo "<p>-----------------------------------------------------------------------</p>";
    
    }



}





?>