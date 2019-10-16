<?php

require_once '../includes/config.php';

$idd = $_GET['id'];
$aff_article = affichage_article($idd);

if(!empty($_POST['supp'])){
    supprimer_article($idd);
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

        <form method="post" action="ajout.php">
            <button type="submit"> Ajouter un article</button>
        </form>
    </nav>

    <div class="container">
        <h1 class="text-center">Blog Ouais</h1>
                <div class="col-md-4">
                    <h2><?= $aff_article['title'] ?></h2>
                    <p><?= $aff_article['content'] ?></p>
                    <form method="post" action="">
                        <input type="submit" name="supp" value="Supprimer l'article">
                    </form>
                </div>
    </div>
</body>
</html>
