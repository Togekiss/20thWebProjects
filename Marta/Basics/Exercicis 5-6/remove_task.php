<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 23/02/2017
 * Time: 19:03
 */

if ($argc != 2) {
    echo "Has de passar una tasca per paràmetres!";
    exit (1);
}

$file = __DIR__ . "/todolist.txt";
$content = file_get_contents($file);

$content = str_replace($argv[1] . "\n", '', $content);
file_put_contents($file, $content);

$file2 = __DIR__ . "/donelist.txt";
$content2 = file_get_contents($file2);

$content2 .= $argv[1];
file_put_contents($file2, $content2);