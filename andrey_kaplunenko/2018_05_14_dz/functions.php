<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 5/18/18
 * Time: 8:28 AM
 * Коды ошибок при загрузке файлов: http://php.net/manual/ru/features.file-upload.errors.php
 */
function userLoggedIn () {
    return(isset($_SESSION['user']) ? true : false);
}

function userGreetings () {
    $regForm = "
    <form method='POST' enctype='application/x-www-form-urlencoded' action=''>
    <p><b>Как вас зовут?</b></p>
    <p><input type='text' name='username' value=''></p>
    <p><input type='submit' value='Зарегистрироваться'></p>
    </form>
    ";

    if(!empty($_POST['username'])) {
        $_SESSION['user'] = htmlspecialchars($_POST['username']);
        return ('Добрый день, '.$_SESSION['user']);
    } elseif(!empty($_SESSION['user'])) {
        return ('Добрый день, '.$_SESSION['user']);
    } else {
        return ($regForm);
    }
}

function uploadFiles ($targetDir, $thumbDir) {
    $uploadForm = "
    <form method='POST' enctype='multipart/form-data' action='' />
    <input type='hidden' name='MAX_FILE_SIZE' value='2000000' />
    <p><b>Выберите файл для загрузки</b></p>
    <p><input type='file' name='myFile' value='' /></p> 
    <p><input type='hidden' name='uploadForm1' value='uF1'></p>
    <p><input type='submit' name='uploadButton' value='Загрузить' /><input type='submit' name='uploadButton2' value='Загрузить и перейти' /></p>
    </form>
    ";
    $saveName = $targetDir.basename($_FILES['myFile']['name']);
    $supportedFiles = ['image/jpeg', 'image/png', 'image/gif', 'text/plain', 'application/pdf']; //array with allowed MIME-TYPEs

    if(isset($_POST['uploadButton2'])) {
        header("Location: index.php?action=gallery");
    }
    if(isset($_POST['uploadForm1'])) {
        if ($_FILES['myFile']['error'] !== UPLOAD_ERR_OK) {
            echo "<p>File was uploaded with errors. Error: {$_FILES['myFile']['error']}</p>";

        } elseif(in_array(mime_content_type($_FILES['myFile']['tmp_name']), $supportedFiles)) { //check if just uploaded files has allowed MIME-TYPE
            echo "<p>File {$_FILES['myFile']['name']} with size {$_FILES['myFile']['size']} was uploaded.</p>";
            if (file_exists($saveName)) {
                echo "<p>File with same name existed and has been overwritten with the new one.</p>";
            }
                $moveResult = move_uploaded_file($_FILES['myFile']['tmp_name'], $saveName);

                if(!$moveResult) {
                    echo "<p>Can't move uploaded file.</p>";
                } else {
                    statReadWrite('WRITE', null, $saveName); //this is our function for calculate, read, and reset statistics
                    $thmbPath = imgThumbGen($saveName, $thumbDir, 150); //let's generate thumbnail if uploaded file is image. If file not image, imgThumbGen() ignore it
                    $chmodResult1 = chmod($saveName, 0777);
                    if($thmbPath != null) { //we change thumbnail permissions if thumbnail actually generated, else (for txt and pdf...) just $chmodResult2 = true
                        $chmodResult2 = chmod($thmbPath, 0777);
                    } else {$chmodResult2 = true;};
                    if(!$chmodResult1 || !$chmodResult2) {echo "<p> Can't change uploaded file permission and(or) thumbnail file permission.</p>";}
                }

        } else echo "<p>Unsupported file uploaded and was deleted from the server.</p>";
    }
    return ($uploadForm);
}

function showFiles($sourceDir, $thumbDir) {
    $fileList = scandir($sourceDir);
    echo '<ul>';
    foreach($fileList as $value) {
        $mimeType = mime_content_type($sourceDir.$value);
        // we check $mimeType == 'directory' because is_dir() not works, and we don't want show directoris;
        // also, we don't want to display images in list, we will show them below as icons.
        if($mimeType == 'directory' || $mimeType == 'image/jpeg' || $mimeType == 'image/png' || $mimeType == 'image/gif') {continue;};
        echo '<li>'.'<a href=\'index.php?action=download&fname='.$value.'\'>'.'[DWNLD]'.$value.'</a>'.'</li>';

    }
    echo '</ul>';
    foreach ($fileList as $value) {
        $mimeType = mime_content_type($sourceDir.$value); //We check actual file filetype...
        if($mimeType == 'image/jpeg' || $mimeType == 'image/png' || $mimeType == 'image/gif') {
            $ext   = pathinfo($value, PATHINFO_EXTENSION);
            echo '<a href=\''.$sourceDir.$value.'\' target=\'_blank\'><img src=\''.$thumbDir.basename($value, '.'.$ext).'_thumb.'.$ext.'\'></a>'; //... but show thumbnails of them
        }
    }
}

function downloadAttachment ($sourceDir, $fileName) {
    //$sourceDir - directory contains uploaded files,
    //$fileName - file which we want to open/download, usually it is in $_GET[fname]
    if(!empty($fileName)) {
        $fullFileName = $sourceDir.$fileName;
        if (!file_exists($fullFileName) || !is_readable($fullFileName)) {
            http_response_code(404);
            echo "404 file [$fullFileName] was not found on webserver.";
        } else {
            http_response_code(200);

            //headers
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($fullFileName).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: '.filesize($fullFileName));
            readfile($fullFileName);
        }
    } else {
        http_response_code(400);
        echo "<p>no file was specified</p>";
    }
}

function statReadWrite($mode, $sourceDir, $fileFullPath) {
    if($mode == 'READ') {
        $imgCounter = $pdfCounter = $txtCounter = $otherCounter = $folderCounter = 0; //in this variables we'll calculate quantity of files specified types
        $fileList = scandir($sourceDir);
        foreach($fileList as $value) {
            $mimeType = mime_content_type($sourceDir.$value);
            if($mimeType == 'image/jpeg' || $mimeType == 'image/png' || $mimeType == 'image/gif') {$imgCounter++; continue;};
            if($mimeType == 'text/plain') {$txtCounter++; continue;};
            if($mimeType == 'application/pdf') {$pdfCounter++; continue;};
            if($mimeType == 'directory') {$folderCounter++; continue;};
            $otherCounter++;
        }

        echo '<br>---------------------------<br>';
        echo 'Статистика нашей галлереи:<br>';
        echo 'Изображений: '.$imgCounter.'<br>';
        echo 'PDF документов: '.$pdfCounter.'<br>';
        echo 'Plain-text документов: '.$txtCounter.'<br>';
        echo 'Папок: '.$folderCounter.'<br>';
        echo 'Файлов других типов: '.$otherCounter.'<br>';

        echo '<br>---------------------------<br>';
        echo 'Пользователь '.$_SESSION['user'].' за текущую сессию загрузил такие файлы:<br>';
        echo 'Изображений: '.$_SESSION['stat']['imgCount'].'<br>';
        echo 'PDF документов: '.$_SESSION['stat']['pdfCount'].'<br>';
        echo 'Plain-text документов: '.$_SESSION['stat']['txtCount'].'<br>';
        //echo 'Папок: '.$_SESSION['stat']['directory'].'<br>';
        echo 'Файлов других типов: '.$_SESSION['stat']['otherCount'].'<br>';

    } elseif($mode == 'WRITE') {
        $fileType = mime_content_type($fileFullPath);
        switch(true) {
            case ($fileType == 'image/jpeg' || $fileType == 'image/png' || $fileType == 'image/gif'):
                $_SESSION['stat']['imgCount']++;
                break;
            case ($fileType == 'application/pdf'):
                $_SESSION['stat']['pdfCount']++;
                break;
            case ($fileType == 'text/plain'):
                $_SESSION['stat']['txtCount']++;
                break;
            default:
                $_SESSION['stat']['otherFileType']++;
        }
    } else return (null);
}

function imgThumbGen($srcFilePath, $destFoldPath, $thmbHW) {
    //This function will generate SQUARE thumbnail with specified thmbHeightWidth even if original image is rectangle;
    //Original image will be resized and then cropped, NOT JUST FITTED to square!
    //$srcFilePath = Your Original Source Image
    //$destFoldPath = "/Users/andrey/Sites/tmp2/"; /*Your Destination Folder */
    //$thmbHW = the side of generated thumbnail (Height == Width)

    $what = getimagesize($srcFilePath);
    $smallestDimension = (($what[0] < $what[1]) ? $what[0] : $what[1]); //Check what smaller - width or height and get smallest
    $file_name = basename($srcFilePath);/* Name of the Image File*/
    $ext   = pathinfo($file_name, PATHINFO_EXTENSION);

    /* Adding image name _thumb for thumbnail image */
    $file_name = basename($file_name, ".$ext") . '_thumb.' . $ext;

    switch(strtolower($what['mime']))
    {
        case 'image/png':
            $img = imagecreatefrompng($srcFilePath);
            $new = imagecreatetruecolor($thmbHW,$thmbHW);
            imagecopyresized($new,$img, 0, 0, ($what[0]-$smallestDimension)/2, ($what[1]-$smallestDimension)/2, $thmbHW, $thmbHW, $smallestDimension, $smallestDimension);
            imagepng($new,$destFoldPath.$file_name, 5);
            imagedestroy($new);
            return ($destFoldPath.$file_name);
        case 'image/jpeg':
            $img = imagecreatefromjpeg($srcFilePath);
            $new = imagecreatetruecolor($thmbHW,$thmbHW);
            imagecopyresized($new,$img, 0, 0, ($what[0]-$smallestDimension)/2, ($what[1]-$smallestDimension)/2, $thmbHW, $thmbHW, $smallestDimension, $smallestDimension);
            imagejpeg($new,$destFoldPath.$file_name, 90);
            imagedestroy($new);
            return ($destFoldPath.$file_name);
        case 'image/gif':
            $img = imagecreatefromgif($srcFilePath);
            $new = imagecreatetruecolor($thmbHW,$thmbHW);
            imagecopyresized($new,$img, 0, 0, ($what[0]-$smallestDimension)/2, ($what[1]-$smallestDimension)/2, $thmbHW, $thmbHW, $smallestDimension, $smallestDimension);
            imagegif($new,$destFoldPath.$file_name);
            imagedestroy($new);
            return ($destFoldPath.$file_name);
        default: return (null);
    }
}