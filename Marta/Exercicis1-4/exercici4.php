<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 27/02/2017
 * Time: 16:01
 */

if ($argc != 2) {
    echo "Has de passar els parametres correctes!";
    exit (1);
}

$array = explode(" ", $argv[1]);

echo "Hi ha " . count($array) . " paraules.\n";

print_r(array_count_values($array));