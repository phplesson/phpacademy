<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 05.05.2018
 * Time: 13:27
 */


$size = memory_get_usage(false);

echo $size . PHP_EOL;

function doSomething(){
  $array = [];
  for($i = 0; $i < 100000; $i++) {
    $array[] = str_pad('----', 255,'++++');
  }
  echo memory_get_usage(false) . PHP_EOL;
  $array = null;
}
doSomething();

sleep(1);
echo memory_get_usage(false) . PHP_EOL;
