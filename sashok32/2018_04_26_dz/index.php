<style>
	body {
		background: white;
		background: linear-gradient(to bottom, RGBA(40,54,255,0.35), transparent);
	}
	li:first-child {
		visibility:hidden;
	}
	li a {
		text-decoration: none;
		transition:0.3s;
		margin:2;
		display: inline-block;
		color: black;
	}
	li a:hover {
		text-decoration: underline;
		background-color: RGBA(255,221,0,0.5);
		font-size: 1.07em;
	}
	h1 {
		border-bottom: 2px solid black;
		border-top: 2px solid transparent;
		font-style: italic;
		width: 30%;
	}
	h1:hover {
		border: 2px solid white;
		//margin-left: 10px;
		width: 30%;
		color: white;
	}
</style>


<?php
//1 check CLI or WEB run

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