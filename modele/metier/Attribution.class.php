<?php

namespace modele\metier;

class Attribution {
    
    private $idEtab;
    private $idTypeChambre;
    private $idGroupe;
    private $nombreChambres;
    
    function __construct($idEtab, $idTypeChambre, $idGroupe, $nombreChambres){
        $this->idEtab = $idEtab;
        $this->idGroupe = $idGroupe;
        $this->idTypeChambre = $idTypeChambre;
        $this->nombreChambres = $nombreChambres;
    }
    
    function getIdEtab(){
        return $this->idEtab;
    }
    
    function getIdGroupe(){
        return $this->idGroupe;
    }
    
    function getIdTypeChambre(){
        return $this->idTypeChambre;
    }
    
    function getNombreChambres(){
        return $this->nombreChambres;
    }
    
    function setIdEtab($idEtab){
        $this->idEtab = $idEtab;
    }
    
    function setIdGroupe($idGroupe){
        $this->idGroupe = $idGroupe;
    }
    
    function setIdTypeChambre($idTypeChambre){
        $this->idTypeChambre = $idTypeChambre;
    }
    
    function setNombreChambres ($nombreChambre){
        $this->nombreChambres = $nombreChambre;
    }
}
