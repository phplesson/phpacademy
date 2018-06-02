<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 31.05.18
 * Time: 14:39
 */

$checker = include('checker.php');
$real = include('real.php');
$complex = include('complex.php');
$real['checkParams'] = $checker['checkParams'];
$complex['checkParams'] = $checker['checkParams'];

return ['real' => $real, 'complex' => $complex];