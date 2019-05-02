<?php
/**
 * Connexion a la base des donnees en retournant un objet PDO
 *
 * @return PDO
 */
function dbConnect(){
    try{
        $db = new PDO('mysql:dbname=contacts_db;host=localhost', 'root', '');
    }catch (PDOException $e){
        die('Erreur due à : '.$e->getMessage());
    }

    return $db;
}
