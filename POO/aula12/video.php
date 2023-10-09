<?php

require_once 'acoesvideo.php';

class Video implements AcoesVideo
{

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    /// mÉTODOS ///
    public function __construct($titulo)
    {
        $this->titulo = $titulo; 
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;   

    }
    public function play()
    {
        $this->reproduzindo = true;
        echo '<p>o video foi iniciado</p>';   
    }
    
    public function pause()
    {
        $this->reproduzindo = false;
        echo '<p>O VIDEO FOI PAUSADO</p>';   
    }

    public function like()
    {
        $this->curtidas ++;   
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function setViews($views)
    {
        $this->views = $views;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
    }

    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
    }
}
