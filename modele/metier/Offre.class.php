<?php

namespace modele\metier;

class Offre {
    
    private $idEtab;        //id de l'établissement
    private $idTypeChambre; //id type de chambre
    private $nbChambres;    //nombre de chambres disponible
    
    function __construct($idEtab, $idTypeChambre, $nbChambres) {
        $this->idEtab = $idEtab;
        $this->idTypeChambre = $idTypeChambre;
        $this->nbChambres = $nbChambres;
        
    }
    
    function getIdEtab() {
        return $this->idEtab;
    }
    
    function getIdTypeChambre() {
        return $this->idTypeChambre;
    }
    
    function getINbChambres() {
        return $this->nbChambres;
    }
    
    function setIdEtab($idEtab) {
        $this->idEtab = $idEtab;
    }
    
    function setIdTypeChambre($idTypeChambre) {
        $this->idTypeChambre = $idTypeChambre;
    }
    
    function setNbChambres($nbChambres) {
        $this->nbChambres = $nbChambres;
    }
}
