<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 02.06.18
 * Time: 8:20
 */

include_once('./vendor/autoload.php');

$config = include('config.php');

$game = new \Game\Evolution($config);

echo $game;


$freeCount = 1;
$show = false;

while($freeCount) {
    $game->run($freeCount, $show);
    echo $game;

    $input = fgets(STDIN);
    $input = (int)$input;

    $show = !($input > 0);
    
    $freeCount = abs($input);
}