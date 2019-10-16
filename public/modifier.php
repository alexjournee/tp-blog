<?php

require_once '../includes/config.php';

$idd = $_GET['id'];
$aff_article = affichage_article($idd);
var_dump($idd);
$titre_article = $aff_article['title'];
$texte_article = $aff_article['content'];

if(!empty($_POST['modif'])){
    $titre = $_POST["titre"];
    $texte = $_POST["texte"];
    modifier_article($titre, $texte, $idd);
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
        <form method="post" action="index.php">
            <button type="submit"> Accueil</button>
        </form>

    </nav>

    <div class="container">
        <form method="post" >
            <p>
                <label for="pseudo">Titre de l'article</label><br />
                <input type="text" name="titre" id="titre"  size="30" maxlength="30" value="<?php if(isset($titre_article)) echo $titre_article ?>" />
            </p>
        <p>
            <label for="ameliorer">Ajouter votre article</label><br />
            <textarea type="text" name="texte" id="texte"  cols="100" rows="10"><?php if(isset($texte_article)) echo $texte_article ?> </textarea>
        </p>
            <input type="submit" name="modif" value="Enregistrer les modifications">
        </form>
</body>
</html>
