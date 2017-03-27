<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 22/02/2017
 * Time: 19:22
 */

function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplica($num1, $num2) {
    return $num1 * $num2;
}

function divideix($num1, $num2) {
    if ($num2 == 0) {
        echo "No es pot dividir per 0!\n";
        return 0;
    }
    else {
        return $num1 / $num2;
    }
}

if ($argc != 4) {
    echo "Has de passar els parametres correctes!";
    exit (1);
}

$ops = ['suma', 'resta', 'multiplica', 'divideix'];

if (in_array($argv[1], $ops)) echo $argv[1]($argv[2], $argv[3]) . "\n";