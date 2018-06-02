<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 13:12
 */

$libs = include('getLibs.php');

$values = $argv;

$p1 = @$argv[1];
$o = @$argv[2];
$p2 = @$argv[3];

$libraryName;
$library;
$a;
$b;

foreach($libs as $name => $lib) {
    
    $a = $lib['getFromStr']($lib, $p1);
    
    if ($a !== null) {
        break;
    }
}

foreach($libs as $name => $lib) {

    $b = $lib['getFromStr']($lib, $p2);

    if ($b !== null) {
        break;
    }
}

if ($a === null) {
    echo 'bad call ' . PHP_EOL;
}


if ($o == '+') {
    $result = $a['add']($a, $b);
} else if ($o == '-') {
    $result = $a['sub']($a, $b, false);
} else {
    echo 'bad operator' . PHP_EOL;
}

echo "a{$o}b = " . $result['__toString']($result) . PHP_EOL;

echo "a = " . $a['__toString']($a) . PHP_EOL;
echo "b = " . $b['__toString']($b) . PHP_EOL;
echo "result = " . $result['__toString']($result) . PHP_EOL;