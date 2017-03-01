<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 23/02/2017
 * Time: 19:17
 */


$file = __DIR__ . "/donelist.txt";
$content = file_get_contents($file);

echo $content;