<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>GroupeDAO : test</title>
    </head>

    <body>
        <h2>Test OffreDAO</h2>

        <?php

        use modele\dao\OffreDAO;
        use modele\dao\EtablissementDAO;
        use modele\dao\TypeChambreDAO;
        use modele\dao\Bdd;
        use modele\metier\Etablissement;
        use modele\metier\Offre;
        use modele\metier\TypeChambre;

require_once __DIR__ . '/../includes/autoload.php';

        //$idEtab = '0350773A';
        Bdd::connecter();

        //Test n°1
        echo "<h3>Test getOneById</h3>";
        try {
            $idEtab = array();
            $idEtab[] = '0350773A';
            $idEtab[] = 'C2';
            $objet = OffreDAO::getOneById($idEtab);
            var_dump($objet);
        } catch (Exception $ex) {
            echo "<h4>*** échec de la requête ***</h4>" . $ex->getMessage();
        }

        // Test n°2
        echo "<h3>2- getAll</h3>";
        try {
            $lesObjets = OffreDAO::getAll();
            var_dump($lesObjets);
        } catch (Exception $ex) {
            echo "<h4>*** échec de la requête ***</h4>" . $ex->getMessage();
        }

//        // Test n°3
        echo "<h3>3- insert</h3>";
        $idEtab = "0352072M";
        $idTypeChambre = "C1";
//        $objet3 = new Etablissement('0352072M', 'La Joliverie', '29 rue paul bellamy', '85110', '
//        Chantonnay', 'abcdefghij', 'contact@la-joliverie.com', 1, '
//        Monsieur', 'MENSSION', '
//        Tanguy');
//        $objet4 = new TypeChambre("C1", "1 lit");
         try {
            $unEtab = EtablissementDAO::getOneById($idEtab);
            var_dump($objet);
        } catch (Exception $ex) {
            echo "<h4>*** échec de la requête ***</h4>" . $ex->getMessage();
        }
         try {
            $unTypeChambre = TypeChambreDAO::getOneById($idTypeChambre);
            var_dump($objet);
        } catch (Exception $ex) {
            echo "<h4>*** échec de la requête ***</h4>" . $ex->getMessage();
        }
        $nbChambres = 3;
        try {
            $idTest3 = array();
            $idTest3 [] = $unEtab->getId();
            $idTest3 [] = $unTypeChambre->getId();
            $uneOffre = new Offre($unEtab, $unTypeChambre, $nbChambres);
            $ok = OffreDAO::insert($uneOffre);

            if ($ok) {
                echo "<h4>ooo réussite de l'insertion ooo</h4>";
                $objetLu = OffreDAO::getOneById($idTest3);
                var_dump($objetLu);
            } else {
                echo "<h4>*** échec de l'insertion ***</h4>";
            }
        } catch (Exception $ex) {
            echo "<h4>*** échec de la requête ***</h4>" . $ex->getMessage();
        }
        
         // Test n°4
        echo "<h3>4- delete</h3>";
        try {
            $idTest4 = array();
            $idTest4 [] = $unEtab->getId();
            $idTest4 [] = $unTypeChambre->getId();
            $ok = OffreDAO::delete($idTest4);
            if ($ok) {
                echo "<h4>ooo réussite de la suppression ooo</h4>";
            } else {
                echo "<h4>*** échec de la supression ***</h4>";
            }
        } catch (Exception $ex) {
            echo "<h4>*** échec de la requête ***</h4>" . $ex->getMessage();
        }

        Bdd::deconnecter();
        ?>


    </body>
</html>
