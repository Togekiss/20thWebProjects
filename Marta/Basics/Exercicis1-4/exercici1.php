<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 22/02/2017
 * Time: 18:41
 */

if ($argc != 2) {
    echo "Has de passar un nombre per paràmetres!";
    exit (1);
}

$numero = $argv[1];

for ($i = 0; $i < 11; $i++) {
    $prod = $numero * $i;
    echo "$numero * $i = $prod \n";
}