<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 21.04.18
 * Time: 2:23
 */

echo "Array examples" . PHP_EOL;

/*
 * simple definition
*/

$arrayInfoFilter = ['name', 'hasCar', 'phone'];

$arrayProductFilter = array('product1', 'product2', 'product3');


$arrayPhrases = [];
//or $arrayPhrases = array();

$arrayPhrases[0] = 'Hello world';
$arrayPhrases[1] = 'Main data';
$arrayPhrases[2] = 'Bye';
$arrayPhrases[12] = '12 chairs';
$arrayPhrases[-14] = 'a lot of time ago';


echo '$arrayInfoFilter' . PHP_EOL;
var_dump($arrayInfoFilter);
echo PHP_EOL . PHP_EOL;

echo '$arrayProductFilter' . PHP_EOL;
var_dump($arrayProductFilter);
echo PHP_EOL . PHP_EOL;

echo '$arrayPhrases' . PHP_EOL;
var_dump($arrayPhrases);
echo PHP_EOL . PHP_EOL;





echo "Array with print_r and echo" . PHP_EOL;
print_r($arrayPhrases);
echo $arrayPhrases;
echo PHP_EOL . PHP_EOL;





$arrayPrices = array(
    'product1'  =>  2.13,
    'product2'  => 11.10,
    'product3'  => 10.87,
    'product4'  =>  5.00,
);


$arrayOrder = [];
$arrayOrder['product2'] = 7;
$arrayOrder['product4'] = 3;


$arrayInfo = [
    'name'      =>  'John',
    'sirName'   =>  'Doe',
    'age'       =>  23,
    'hasCar'    =>  true,
    'phone'     =>  '+1 555 654 32 10',
    'status'    =>  'married',
    'children'  =>  array('Bob', 'Alice', 'Ketty'),
];


echo '$arrayPrices' . PHP_EOL;
var_dump($arrayPrices);
echo PHP_EOL . PHP_EOL;

echo '$arrayOrder' . PHP_EOL;
var_dump($arrayOrder);
echo PHP_EOL . PHP_EOL;

echo '$arrayInfo' . PHP_EOL;
var_dump($arrayInfo);
echo PHP_EOL . PHP_EOL;








$children = $arrayInfo['children'];
$child0 = $children[0];
$child1 = $arrayInfo['children'][1];


echo '$children' . PHP_EOL;
var_dump($children);
echo PHP_EOL . PHP_EOL;

echo '$child0' . PHP_EOL;
var_dump($child0);
echo PHP_EOL . PHP_EOL;

echo '$child1' . PHP_EOL;
var_dump($child1);
echo PHP_EOL . PHP_EOL;






$arrayInteresting = [-2 => 'first', 'second', 'third'];

echo '$arrayInteresting' . PHP_EOL;
var_dump($arrayInteresting);
echo PHP_EOL . PHP_EOL;


$arrayInteresting = [1 => 'first', 'second', 'third'];

echo '$arrayInteresting' . PHP_EOL;
var_dump($arrayInteresting);
echo PHP_EOL . PHP_EOL;


$arrayInteresting = [10 => 'first', 'second', 'third'];

echo '$arrayInteresting' . PHP_EOL;
var_dump($arrayInteresting);
echo PHP_EOL . PHP_EOL;
