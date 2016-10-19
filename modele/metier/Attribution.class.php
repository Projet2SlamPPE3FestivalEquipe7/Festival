<?php

namespace modele\metier;

class Attribution {
    
    private $uneOffre;
    private $unGroupe;
    private $nombreChambres;
    
    function __construct($uneOffre, $unGroupe, $nombreChambres){
        $this->uneOffre = $uneOffre;
        $this->unGroupe = $unGroupe;
        $this->nombreChambres = $nombreChambres;
    }
    function getUneOffre() {
        return $this->uneOffre;
    }

    function getUnGroupe() {
        return $this->unGroupe;
    }

    function getNombreChambres() {
        return $this->nombreChambres;
    }

    function setUneOffre($uneOffre) {
        $this->uneOffre = $uneOffre;
    }

    function setUnGroupe($unGroupe) {
        $this->unGroupe = $unGroupe;
    }

    function setNombreChambres($nombreChambres) {
        $this->nombreChambres = $nombreChambres;
    }
}