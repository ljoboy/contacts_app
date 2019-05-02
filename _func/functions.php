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


