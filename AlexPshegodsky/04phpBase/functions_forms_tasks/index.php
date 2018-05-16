<?php
return [
        'func' => function() {
    $basePath = "../AlexPshegodsky/04phpBase/functions_forms_tasks/tasks/";
    $taskList=array();
    $includedTasks = array();
    $names = array();
    $dir= scandir($basePath);
   foreach ($dir as $task){
       if (substr($task,0,1) == '.'){
           continue;
       }
       $taskList[] = $task;

       $includedTasks[] = include "tasks/$task";




   }

   foreach ($includedTasks as $key=>$urls) {
       $names[$urls['name']] = $urls;
       $names[$urls['name']]['task'] = str_replace('.php','',$taskList[$key]);

   }
    return $names;
        }
];