<?php

include_once('DrapieznikInterface.php');
include_once('Zabojca.php');

class Drapieznik extends Zwierz implements DrapieznikInterface{

    private $zabojca;

    public function __construct($gatunek, $plec, $umaszczenie, $wydawanyDzwiek, $zabojca) {
        parent::__construct($gatunek, $plec, $umaszczenie, $wydawanyDzwiek);
        $this->zabojca = $zabojca;
        
    }
    public function getPredkoscMaksymalna() {

        $predkoscMaksymalna = ($this->zabojca->getWaga() * $this->zabojca->getLiczbaNog()/ 20 + 5);
        
        return $predkoscMaksymalna;
        
    }

    public function getPrzyspieszenie() {
        
        $przyspieszenie = $this->zabojca->getWaga() * $this->zabojca->getLiczbaNog() / 2 * 10;
        
        return $przyspieszenie;
        
    }
    
    public function zmien($zabojca)
    {
        $this->zabojca = $zabojca;
    }
    
    public function getParametry()
    {
        echo "Prędkość maksymalna: ".$this->getPredkoscMaksymalna().". "."przyśpieszenie: ".$this->getPrzyspieszenie()."\n";
    }

}
