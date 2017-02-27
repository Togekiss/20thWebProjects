<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 23/02/2017
 * Time: 18:58
 */

$file = __DIR__ . "/todolist.txt";
$content = file_get_contents($file);

echo $content;