<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 7:40
 */

error_reporting(0xffffffff);

$targetDir = "uploads/";
$saveName = $targetDir . basename($_FILES["myFile"]["name"]);

if(isset($_POST["action"])) {
    //check error
    if($_FILES['myFile']['error'] !== UPLOAD_ERR_OK) {
        //error exists
        echo "<p>file was uploaded with errors. Error: {$_FILES['myFile']['error']}</p>";
    } else {
        //ok
        echo "<p>file {$_FILES['myFile']['name']} with size {$_FILES['myFile']['size']} was received";

        if(file_exists($saveName)) {
            echo "<p>a file with the same name existed and it was overwritten by a new one</p>";
        }

        $moveResult = move_uploaded_file($_FILES['myFile']['tmp_name'], $saveName);

        if (!$moveResult) {
            echo "<p>can not move uploaded file</p>";
        } else {
            $chmodResult = chmod($saveName, 0777);
            
            if (!$chmodResult) {
                echo "<p>can not change file permission</p>";
            }
        }
    }
}