<?php 

    require_once 'video.php';
    require_once 'gafanhoto.php';

    class Visualizacao  {
    
    private $espectador;
    private $filme;


    ///METODOS///
    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        
    }
    /*
    public function avaliar(){

    }

    public function avaliar($nota){
        
    }

    public function avaliar($porc){
        
    }*/

    public function getEspectador(){
		return $this->espectador;
	}

	public function setEspectador($espectador){
		$this->espectador = $espectador;
	}

	public function getFilme(){
		return $this->filme;
	}

	public function setFilme($filme){
		$this->filme = $filme;
	}








}

?>