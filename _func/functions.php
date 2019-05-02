<?php
    require_once 'dbConnect.php';

    function is_contact($contact){
        $keys = array('idConatact', 'nom', 'postnom', 'prenom', 'numero', 'email', 'description', 'etat', 'genre', 'cree_le');
        $count = 0;
        foreach ($keys as $key) {
            if (array_key_exists($key,$contact)){
                $count += 1;
            }
        }
        return $count === count($contact);
    }

    function addContact($contact){
        if (is_contact($contact)){
            $verif = true;
            try{
                $db = dbConnect();
                $db->prepare("INSERT INTO contacts(idContact, nom, postnom, prenom, numero, email, description, cree_le, etat, genre)
                                        VALUES(null, :nom, :postnom, :prenom, :numero, :email, :description, now(), :etat, :genre)");
                $db->execute([
                    "nom" => $contact['nom'],
                    "postnom" => $contact['postnom'],
                    "prenom" => $contact['prenom'],
                    "numero" => $contact['numero'],
                    "email" => $contact['email'],
                    "description" => $contact['description'],
                    "etat" => $contact['etat'],
                    "genre" => $contact['genre']
                ]);
            }catch (PDOException $e){
                $verif = false;
            }finally{
                return $verif;
            }
        }
    }
