<?php


$test = include "../AlexPshegodsky/04phpBase/functions_forms_tasks/index.php";
$test2 = call_user_func($test['func']);
echo 'azazaza1';
if(isset($_POST['showform'])) {
    $formGenerator = include "views/form.php";
    $result = call_user_func($formGenerator['func'], $_POST['task']);
}
$urls = call_user_func($test['func']);



if(isset($_POST['param1'])){
    $task = $_POST['task'];
    $dataProcessing = include "tasks/$task.php";
    $funcResponds = call_user_func($dataProcessing['func'],$_POST['param1'],$_POST['param2']);
    echo '<div id="result">';
    foreach ($funcResponds as $funcRespond ){
        echo $funcRespond."<br>";
    }
    echo '</div>';
}