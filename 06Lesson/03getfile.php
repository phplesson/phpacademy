<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 05.05.18
 * Time: 8:20
 */

$targetDir = 'uploads/';

if(!empty($_GET['fname'])) {
    $fileName = $targetDir . $_GET['fname'];

    if (!file_exists($fileName) || !is_readable($fileName)) {
        http_response_code(404);
        echo "404 admins look for the file but not found that";
    } else {
        http_response_code(200);

        //headers
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fileName));
        readfile($fileName);
    }
} else {
    http_response_code(400);
    echo "<p> no file was specified</p>";
}