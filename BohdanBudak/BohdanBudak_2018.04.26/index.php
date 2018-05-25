<style>
body {
    background: linear-gradient(to top right, deepskyblue, hotpink);
    border: 3px solid darkblue;
    width: 1000px;
    height: 700px;
    margin-left: 13%;
	}

h1 {
    color: white;
    font-style: italic;
    margin-left: 20%;
    text-shadow: 1px 1px 1px blue, 0 0 1em red;
    font-size: 2em;
    margin-top: 3%;
   }
h1:hover {
    color: deepskyblue;
}

h2 {
    color: white;
    font-style: italic;
    font-size: 25px;
    margin-left: 1%;
}

h2:hover {
    color: lawngreen;
}

h3 {
    color: white;
    font-style: italic;
    font-size: 15px;
    margin-left: 1%;
}

</style>
<?php
include('./functions.php');

list($action, $args) = detectWebInput();

$libName = "./$action.php";

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