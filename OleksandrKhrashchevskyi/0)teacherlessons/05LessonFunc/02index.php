<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 03.05.2018
 * Time: 18:41
 */
define('FILE_NAME', 'file.log.txt');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_POST['s'])) {
    file_put_contents(FILE_NAME,
      $_POST['s'] . PHP_EOL . PHP_EOL, FILE_APPEND);
//      $_POST['s'] . PHP_EOL . PHP_EOL);

  }

  header('Location: ' . $_SERVER['HTTP_REFERER']);
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
  @unlink(FILE_NAME);
} else {
  echo "<pre>";
  echo @file_get_contents(FILE_NAME);
  echo "<pre>";
}