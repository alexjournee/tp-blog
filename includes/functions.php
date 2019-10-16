<?php

function get_all_articles()
{
    global $db;
    try { 
        $sth = $db->query("SELECT * FROM articles");
        return $sth->fetchAll();
    }
    catch(Exception $e){
        var_dump($e);
    }
}

function add_an_article($titre,$texte)
{
    global $db;
    
        $sth = $db->prepare("INSERT INTO articles (title, content) VALUES (?,?)");
        $sth->execute(array($titre,$texte));
}

function modifier_article($title, $content, $id)
{
    global $db;
    $sth = $db->prepare("UPDATE articles SET title = ?, content = ? WHERE id= ?");
    $sth->execute(array( $title, $content, $id));

}

function affichage_article($id)
{
    global $db;
    $sth = $db->prepare("SELECT * FROM articles WHERE id= ? ");
    $sth->execute(array($id));
    return $sth->fetch();

}

function supprimer_article($id)
{
    global $db;
    $sth = $db->prepare("DELETE FROM articles where id = ? ");
    $sth->execute(array($id));
}