<?php
require_once 'dbConnect.php';

function is_contact($contact)
{
    $keys = array('idConatact', 'nom', 'postnom', 'prenom', 'numero', 'email', 'description', 'etat', 'genre', 'cree_le');
    $count = 0;
    foreach ($keys as $key) {
        if (array_key_exists($key, $contact)) {
            $count += 1;
        }
    }
    return $count === count($contact);
}

/**
 * @param $contact
 * @return bool
 */
function addContact($contact)
{
    $verif = null;
    if (is_contact($contact)) {
        try {
            $db = dbConnect();
            $r = $db->prepare("INSERT INTO contacts(idContact, nom, postnom, prenom, numero, email, description, cree_le, etat, genre)
                                        VALUES(null, :nom, :postnom, :prenom, :numero, :email, :description, now(), :etat, :genre)");
            $r->execute(array("nom" => $contact['nom'], "postnom" => $contact['postnom'], "prenom" => $contact['prenom'], "numero" => $contact['numero'], "email" => $contact['email'], "description" => $contact['description'], "etat" => $contact['etat'], "genre" => $contact['genre']));
            $verif = true;
        } catch (PDOException $e) {
            $verif = false;
        }
    }
    return $verif;
}

/**
 * @return array|bool
 */
function getContacts()
{
    $contacts = array();
    try {
        $db = dbConnect();
        $r = $db->prepare("SELECT * FROM contacts WHERE etat = 1");
        $r->execute();
        while ($c = $r->fetchAll(PDO::FETCH_ASSOC)) {
            $contacts[] = $c;
        }
    } catch (PDOException $e) {
        return false;
    }
    return $contacts;
}

function getContact($id)
{
    $contact = null;
    try{
        $db = dbConnect();
        $r = $db->prepare("SELECT * FROM contacts WHERE id = :id AND etat = 1");
        $r->execute(array("id"=>$id));
        while ($c = $r->fetch(PDO::FETCH_ASSOC)){
            $contact = $c;
        }
    }catch (PDOException $e){
        $contact = false;
    }
    return $contact;
}
