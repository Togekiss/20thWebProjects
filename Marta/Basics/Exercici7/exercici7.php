<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 27/02/2017
 * Time: 16:22
 */


function nomOk($nom) {
    return (strlen($nom) <= 20);
}

function edatOk($edat) {
    return ($edat > 0 && $edat < 121);
}

function emailOk($email) {
    return (filter_var($email, FILTER_VALIDATE_EMAIL));
}

if (empty($_POST)) {
    header("Location: index.php");
    exit;
}

if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['edat'])) {
    header("Location: index.php");
    exit;
}

$nom = $_POST['nom'];
$email = $_POST['email'];
$edat = $_POST['edat'];

if (nomOk($nom) && emailOk($email) && edatOk($edat)) {
    echo nl2br("Nom: $nom \nEmail: $email \nEdat: $edat");
}
else {
    header("Location: index.php");
    exit;
}