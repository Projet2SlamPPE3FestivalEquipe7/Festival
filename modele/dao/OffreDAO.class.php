<?php

namespace modele\dao;

use modele\metier\Offre;
use PDO;
use modele\dao\EtablissementDAO;
use modele\dao\TypeChambreDAO;

/**
 * Description of GroupeDAO
 * Classe métier :  Groupe
 * @author btssio
 */
class OffreDAO implements IDAO {


    protected static function enregVersMetier($enreg) {
        $nbChambres = $enreg['NOMBRECHAMBRES'];
        $idEtab = $enreg['IDETAB'];
        $idTypeChambre = $enreg['IDTYPECHAMBRE'];        
        $unEtablissement = EtablissementDAO::getOneById($idEtab) ;       
        $unTypeChambre = TypeChambreDAO::getOneById($idTypeChambre);

                   
        $uneOffre = new Offre($unEtablissement,$unTypeChambre, $nbChambres);
        return $uneOffre;
    }


    protected static function metierVersEnreg($objetMetier, $stmt) {
        // On utilise bindValue plutôt que bindParam pour éviter des variables intermédiaires
        $stmt->bindValue(':idEtab', $objetMetier->getUnEtablissement()->getId());        
        $stmt->bindValue(':idTypeChambre', $objetMetier->getUnTypeChambre()->getId());
        $stmt->bindValue(':nombreChambres', $objetMetier->getNbChambres());
               
    }

    public static function delete($id) {
        $ok = false;
        $requete = "DELETE FROM Offre WHERE idEtab = :IdEtab AND idTypeChambre = :IdTypeChambre";
        $stmt = Bdd::getPdo()->prepare($requete);
        $stmt->bindParam(':IdEtab', $idEtab);
        $stmt->bindParam(':IdTypeChambre', $idTypeChambre);
        $ok = $stmt->execute();
        $ok = $ok && ($stmt->rowCount() > 0);
        return $ok;      
                
        
    }

    public static function getAll() {
        $lesObjets = array();
        $requete = "SELECT * FROM Offre";
        $stmt = Bdd::getPdo()->prepare($requete);
        $ok = $stmt->execute();
        if ($ok) {
            while ($enreg = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $lesObjets[] = self::enregVersMetier($enreg);
            }
        }
        return $lesObjets;
    }

    public static function getOneById($id) {
        $objetConstruit = null;        
        $idEtab = $id[0];
        $idTypeChambre = $id[1];
        $requete = "SELECT * FROM Offre WHERE idEtab = :idEtab AND idTypeChambre = :idTypeChambre";
        $stmt = Bdd::getPdo()->prepare($requete);
        $stmt->bindParam(':idEtab', $idEtab);
        $stmt->bindParam(':idTypeChambre', $idTypeChambre);
        $ok = $stmt->execute();
        // attention, $ok = true pour un select ne retournant aucune ligne
        if ($ok && $stmt->rowCount() > 0) {
            $objetConstruit = self::enregVersMetier($stmt->fetch(PDO::FETCH_ASSOC));
        }
        return $objetConstruit;
    }

    public static function insert($objet) {
        $unEtablissement = $objet->getUnEtablissement();
        $unTypeChambre = $objet->getUnTypeChambre();
        $nbChambres = $objet->getNbChambres();
        $idEtab = $unEtablissement->getId();
        $idTypeChambre = $unTypeChambre->getId();
        $ok = false;
        $requete = "INSERT INTO Offre VALUES (:idEtab, :idTypeChambre, :nombreChambres)";
        $stmt = Bdd::getPdo()->prepare($requete);
//        $stmt->bindParam(':IdEtab', $idEtab);
//        $stmt->bindParam(':IdTypeChambre', $idTypeChambre);
//        $stmt->bindParam(':NbChambres', $nbChambres);
        self::metierVersEnreg($objet, $stmt);
        $ok = $stmt->execute();
        $ok = $ok && $stmt->rowCount() > 0;
        return $ok;
    }

    public static function update($id, $objet) {
        
          $ok = false;
        $requete = "UPDATE  Offre SET idEtab=:IdEtab, IdTypeChambre=:IdTypeChambre,
           NbChambres=:NbChambres
           WHERE idEtab=:IdEtab";
        $stmt = Bdd::getPdo()->prepare($requete);
        self::metierVersEnreg($objet, $stmt);
        $stmt->bindParam(':idEtab', $Etablissement);
        $ok = $stmt->execute();
        return ($ok && $stmt->rowCount() > 0); 
    }

}