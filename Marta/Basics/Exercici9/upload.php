<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 01/03/2017
 * Time: 13:06
 */


if (empty($_FILES["image"])) {
    header("Location: index.php");
    exit;
} else {
    if ($_FILES["image"]["error"] !== UPLOAD_ERR_OK) {
        if ($_FILES["image"]["error"] === 2) echo nl2br("Fitxer massa gran.\n");
        else echo nl2br("Hi ha hagut un error. \n");
        exit;
    }


    $file = $_FILES["image"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if(getimagesize($file["tmp_name"]) === false) {
        echo "Fitxer incorrecte.";
        exit;
    }

    if ($imageFileType !== 'gif' && $imageFileType !== 'jpg' && $imageFileType !== 'png') {
        echo nl2br("Tipus de fitxer incorrecte. \n");
        exit;
    }


    $dim = getimagesize($file["tmp_name"]);
    if ($file["size"] > 1000000 || $dim[0] > 200 || $dim[1] > 200) {
        echo "El fitxer es massa gran.";
        exit;
    }


    $ok = move_uploaded_file($file['tmp_name'], $target_file);
    if ($ok) echo nl2br("Fitxer pujat correctament.\n" );
    else echo nl2br("El fitxer no s'ha pogut pujar.\n");


}
