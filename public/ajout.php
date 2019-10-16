<?php

require_once '../includes/config.php';

    if(!empty($_POST['bouton'])){
        $titre = $_POST["titre"];
        $texte = $_POST["texte"];
        add_an_article($titre,$texte);
        header("location:index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="nav">
        <form method="post" action="">
            <button type="submit"> Accueil</button>
        </form>

        <form method="post" action="ajout.php">
            <button type="submit"> Ajouter un article</button>
        </form>
    </nav>
    
    <form method="post" >
        <p>
            <label for="pseudo">Titre de l'article</label><br />
            <input type="text" name="titre" id="titre"  size="30" maxlength="30" />
        </p>
    <p>
        <label for="ameliorer">Ajouter votre article</label><br />
        <textarea type="text" name="texte" id="texte"  cols="100" rows="10"> </textarea>
    </p>
        <input type="submit" name="bouton" value="Ajouter l'article">
    </form>
</body>
</html>
