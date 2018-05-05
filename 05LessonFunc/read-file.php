<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 03.05.2018
 * Time: 20:33
 */

$fileName = '1.txt';

if (!file_exists($fileName)) {
  echo "file does not exist" . PHP_EOL;
}

if (!is_readable($fileName)) {
  echo "file is not readable" . PHP_EOL;
}

is_wr