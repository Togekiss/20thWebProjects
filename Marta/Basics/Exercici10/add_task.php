<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 23/02/2017
 * Time: 18:46
 */


if (empty($_POST) || empty($_POST['tasca'])) {
    header("Location: index.php");
    exit;
}

$tasca = $_POST['tasca'];

$file = __DIR__ . "/todolist.txt";
$content = file_get_contents($file);
$content .= $tasca . "\n";
file_put_contents($file, $content);

header("Location: index.php");