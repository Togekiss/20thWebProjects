<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 22/02/2017
 * Time: 19:22
 */

function suma($nums) {
    $sum = 0;

    foreach ($nums as $num) $sum = $sum + $num;

    return $sum;
}

function resta($nums) {
    $sum = $nums[0];

    $nums2 = array_slice($nums, 1);

    foreach ($nums2 as $num) $sum = $sum - $num;

    return $sum;
}

function multiplica($nums) {
    $sum = 1;

    foreach ($nums as $num) $sum = $sum * $num;

    return $sum;
}

function divideix($nums) {
    $sum = $nums[0];

    $nums2 = array_slice($nums, 1);

    foreach ($nums2 as $num) {
        if ($num == 0) {
            echo "No es pot dividir per 0!\n";
            return 0;
        }
        else $sum = $sum / $num;
    }

    return $sum;
}

if ($argc < 4) {
    echo "Has de passar els parametres correctes!";
    exit (1);
}

$ops = ['suma', 'resta', 'multiplica', 'divideix'];
$nums = array_slice($argv, 2);



if (in_array($argv[1], $ops)) {
    echo $argv[1]($nums) . "\n";
}