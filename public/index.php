<?php

require_once '../includes/config.php';
require_once '../includes/functions.php';

$articles = get_all_articles();

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
        <div class="row">
            <?php foreach($articles as $article): ?>
                <div class="col-md-4">
                    <h2><?= $article['title'] ?></h2>
                    <p><?= $article['content'] ?></p>
                    <a href="affichage.php?id=<?= $article['id']?>" class="btn btn-primary"> Lire </a>
                    <a href="modifier.php?id=<?= $article['id']?>" class="btn btn-secondary"> Modifier </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>
</html>
