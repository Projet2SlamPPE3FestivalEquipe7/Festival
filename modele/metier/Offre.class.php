<?php
namespace modele\metier;

/**
 * Description of Offre
 *
 * @author blouerat
 */
class Offre {
     /**
     * identifiant de l'établissement
     * @var string
     */
    private $idEtab;
     /**
     * type de chambre
     * @var string
     */
    private $typeChambre;
     /**
     * nombre de chambres
     * @var int
     */
    private $nbChambres;
    
    
    function __construct($idEtab, $typeChambre, $nbChambres) {
        $this->idEtab = $idEtab;
        $this->typeChambre = $typeChambre;
        $this->nbChambres = $nbChambres;
    }
    function getIdEtab() {
        return $this->idEtab;
    }

    function getTypeChambre() {
        return $this->typeChambre;
    }
    
     function getNbChambres() {
        return $this->nbChambres;
    }

    function setIdEtab($idEtab) {
        $this->idEtab = $idEtab;
    }

    function setTypeChambre($typeChambre) {
        $this->typeChambre = $typeChambre;
    }
    
    function setNbChambres($nbChambres) {
        $this->nbChambres = $nbChambres;
    }

}
