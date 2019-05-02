<?php
require_once "_func/functions.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['modifier'])) {
        include_once "_func/updateContact.php";
    } elseif (isset($_POST['ajouter'])) {
        addContact($_POST);
    }
} else {
    if (isset($_GET['supprimer'])) {
            $p = deleteContact($_GET['supprimer']);
    } else {
        include_once "_inc/main.php";
        exit;
    }
}
header("Location: /contacts/");
