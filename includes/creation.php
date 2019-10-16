<?php

$titre = $_POST["titre"];
$texte = $_POST["texte"];
var_dump($titre);
var_dump($texte);

    $sth = $db->prepare("INSERT INTO articles (title, content) VALUES (:titre,:texte)");
    $sth->bindParam(':titre', $titre);
    $sth->bindParam(':texte', $texte);
    $sth->execute();

?>