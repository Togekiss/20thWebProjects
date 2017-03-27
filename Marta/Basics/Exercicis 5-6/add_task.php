<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 23/02/2017
 * Time: 18:46
 */


if ($argc != 2) {
    echo "Has de passar una tasca per paràmetres!";
    exit (1);
}

$file = __DIR__ . "/todolist.txt";
$content = file_get_contents($file);
$content .= $argv[1] . "\n";
file_put_contents($file, $content);