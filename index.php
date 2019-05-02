<?php
require_once "_func/functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['modifier'])){
        //TODO::Implemente this
    }elseif (isset($_POST['ajouter'])){
        //TODO::Implemente this
    }
}else{
    if (isset($_GET['supprimer'])){
        if (is_integer($_GET['supprimer'])){
            $p = deleteContact($_GET['supprimer']);
        }
    }else{
        include_once "_inc/main.php";
        exit;
    }
}
header("Location: /contacts/");
