<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 23/02/2017
 * Time: 19:03
 */

if (empty($_GET) || empty($_GET['tasca'])) {
    header("Location: index.php");
    exit;
}

$tasca = $_GET['tasca'];

$file = __DIR__ . "/todolist.txt";
$content = file_get_contents($file);

$content = str_replace($tasca . "\n", '', $content);
file_put_contents($file, $content);

$file2 = __DIR__ . "/donelist.txt";
$content2 = file_get_contents($file2);

$content2 .= $tasca . "\n";
file_put_contents($file2, $content2);

header("Location: index.php");