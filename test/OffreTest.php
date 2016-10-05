<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Offre Test</title>
    </head>
    <body>
        <?php
        use modele\metier\Offre;
        require_once __DIR__ . '/../includes/autoload.php';
        echo "<h2>Test unitaire de la classe métier Offre</h2>";
        $objet = new Offre("0352073B","","C1",5);
        var_dump($objet);
        ?>
    </body>
</html>


