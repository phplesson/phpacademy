<?php

//1 check CLI or WEB run
if (php_sapi_name() == 'cli'){
	define('EOL', PHP_EOL);
}
else{
	define('EOL', '<br>');
}
//echo PHP_SAPI;

//2 check AS_LIBRARY


//example for WEB and not AS_LIBRARY

include('./lib/functions.php');

list($action, $args) = detectWebInput();

$libName = "./lib/$action.php";

$viewData = include($libName);

if ($viewData['argCount'] === 0) {
    $viewData['result'] = call_user_func($viewData['func']);
} elseif ($args !== null) {
    $viewData['result'] = call_user_func_array($viewData['func'], $args);
} else {
    $viewData['result'] = '';
}

include('view/header.php');

include($viewData['view']);

include('view/footer.php');