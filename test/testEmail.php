<?php

include "../includes/_gestionErreurs.inc.php";

$mail1 = "tmenssion@gmail.com";
$mail2 = "ttt";

if (estUnEmail($mail1)){
    echo "ce mail est bon : $mail1 <br/>";
}else{
    echo "echec du test : $mail1 <br/>";
}

if (!estUnEmail($mail2)){
    echo "test réussi : $mail2 <br/>";
}else{
    echo "echec du test : $mail2 <br/>";
}

?>