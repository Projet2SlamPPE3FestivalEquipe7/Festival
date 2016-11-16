<?php

namespace modele\metier;

class Offre {
    
    private $unEtablissement;//type établissement
    private $unTypeChambre; //type TypeChambre
    private $nbChambres;    //nombre de chambres disponible
    
    function __construct($unEtablissement, $unTypeChambre, $nbChambres) {
        $this->unEtablissement = $unEtablissement;
        $this->unTypeChambre = $unTypeChambre;
        $this->nbChambres = $nbChambres;
        
    }
    
    function getUnEtablissement() {
        return $this->unEtablissement;
    }
    
    function getUnTypeChambre() {
        return $this->unTypeChambre;
    }
    
    function getNbChambres() {
        return $this->nbChambres;
    }
    
    function setUnEtablissement($unEtablissement) {
        $this->unEtablissement = $unEtablissement;
    }
    
    function setUnTypeChambre($unTypeChambre) {
        $this->unTypeChambre = $unTypeChambre;
    }
    
    function setNbChambres($nbChambres) {
        $this->nbChambres = $nbChambres;
    }
}
