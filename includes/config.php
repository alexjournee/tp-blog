<?php

//database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'blog');
#define('DB_PORT', '3306');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $db = new PDO('mysql:host=' .DB_HOST. ';dbname=' .DB_NAME, DB_USER, DB_PASS);
    $db->exec("SET CHARACTER SET utf8");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(Exception $e) {
    echo 'Impossible de se connecter à la base de donnée</br>';
    echo 'Erreur : ' .  $e->getMessage() . '<br />';
    echo 'N° : ' .      $e->getCode();
}

require_once 'functions.php';
