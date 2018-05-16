<?php
return [
    "func" => function ($file) {

        $taskDir = scandir("../AlexPshegodsky/04phpBase/functions_forms_tasks/tasks");
        $task = $file;
        $file = $file . '.php';
        if (!in_array($file, $taskDir)) {
            die("No suck file allowed!");
        }
        $taskFile = include "../AlexPshegodsky/04phpBase/functions_forms_tasks/tasks/$file";

        if ($taskFile['inputType'] == 'textArea') {
            echo "<form id='form'>";
            for ($i = 1; $i <= $taskFile['argCount']; $i++) {
                echo "<textarea name='param$i'></textarea>";
            }
            echo "<input type='hidden' name='user' value='AlexPshegodsky'>";
            echo "<input type='hidden' name='task' value='$task'>";
            echo "<input type='submit' value='send'>";
            echo "</form>";
        } elseif ($taskFile['inputType'] == 'webForm') {
            echo "<form id='form'>";
            for ($i = 1; $i <= $taskFile['argCount']; $i++) {
                echo "<input type='text' name='param$i'>";
            }
            echo "<input type='hidden' name='user' value='AlexPshegodsky'>";
            echo "<input type='hidden' name='task' value='$task'>";
            echo "<input type='submit' value='send'>";
            echo "</form>";
        } elseif ($taskFile['inputType'] == 'fileForm') {
            echo "<form id='form' enctype='multipart/form-data'>";
            echo "<label>Файл:</label>";
	        echo "<input type='file' name='param01' />";
            echo "<input type='hidden' name='user' value='AlexPshegodsky'>";
            echo "<input type='hidden' name='task' value='$task'>";
	        echo "<input type='submit' value='send' />";
            echo "</form>";
        }
    }
];