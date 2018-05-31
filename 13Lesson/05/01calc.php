<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 13:12
 */

$checker = include('checker.php');
$real = include('real.php');
$complex = include('complex.php');
$real['checkParams'] = $checker['checkParams'];
$complex['checkParams'] = $checker['checkParams'];

$libs = ['real' => $real, 'complex' => $complex];


$values = $argv;

$p1 = @$argv[1];
$o = @$argv[2];
$p2 = @$argv[3];

$libraryName;
$library;
$a;
$b;

foreach($libs as $name => $lib) {
    error_clear_last();
    $a = @$lib['getFromStr']($lib, $p1);
    $error = error_get_last();
    if (error_get_last() !== null) {
        continue;
    }
    error_clear_last();
    $b = @$lib['getFromStr']($lib, $p2);
    if (error_get_last() !== null) {
        continue;
    }

    $libraryName = $name;
    $library = $lib;
    
    break;
}

if ($library == null) {
    echo 'Bad call' . PHP_EOL;
    exit();
}

if ($o == '+') {
    $result = $library['add']($library, $a, $b);
} else if ($o == '-') {
    $result = $library['sub']($library, $a, $b);
} else {
    $result = $library['getZero']($library);
}

echo "a{$o}b = " . print_r($result, true) . PHP_EOL;