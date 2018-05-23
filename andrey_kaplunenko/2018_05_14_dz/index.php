<?php
//ini_set('session.save_path', '/Users/andrey/Sites/sessions');
//ini_set('upload_tmp_dir', '/Users/andrey/Sites/tmp2');
require_once('functions.php');
@session_start();
define('STORAGE_ROOT_FOLD', './');
define('UPL_FILES', 'uploaded/');
define('THMB_FILES', '_thumb/');
define('UPL_FILESTORAGEPATH', STORAGE_ROOT_FOLD.UPL_FILES);
define('THMB_FILESTORAGEPATH', STORAGE_ROOT_FOLD.THMB_FILES);
if(!userLoggedIn()) { //explicit initialize statistic variables (imgCount=0, pdfCount=0...) only if user not logged in
    statReadWriteInit('INIT', null, null);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Файловая галлерея.</title>
</head>
<body>
<p><a href="index.php?action=main">Главная</a> | <a href="index.php?action=upload">Загрузить</a> | <a href="index.php?action=gallery">Просмотреть</a> | <a href="index.php?action=stat">Статистика</a>
</p>
<?php
$action = $_GET['action'];
switch($action) {
    case 'main':
        echo userGreetings();
    break;
    case 'upload':
        echo userGreetings();
        if(userLoggedIn()) {
            echo uploadFiles (UPL_FILESTORAGEPATH, THMB_FILESTORAGEPATH);
        }
    break;
    case 'gallery':
        echo userGreetings();
        if(userLoggedIn()) {
            showFiles(UPL_FILESTORAGEPATH, THMB_FILESTORAGEPATH);
        }
    break;
    case 'stat':
        echo userGreetings();
        if(userLoggedIn()) {
            statReadWriteInit('READ', UPL_FILESTORAGEPATH, null);
        }
    break;
    case 'download':
        downloadAttachment (UPL_FILESTORAGEPATH, $_GET['fname']);
        break;
    default:
        echo userGreetings();
}
?>

<table>
    <tr>
        <td style="background-color: #808080" colspan="3"><?php echo '<pre>Your system tmp folder for uploads: '.ini_get('upload_tmp_dir').'</pre>';?></td>
    </tr>
    <tr>
        <td style="background-color: #AAAAAA"><?php echo '<pre>'.'$_POST array:'.'</pre>';?></td>
        <td style="background-color: #CCCCCC"><?php echo '<pre>'.'$_FILES array:'.'</pre>';?></td>
        <td style="background-color: #EEEEEE"><?php echo '<pre>'.'$_SESSION array:'.'</pre>';?></td>
    </tr>
    <tr>
        <td style="background-color: #AAAAAA" valign="top"><?php
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
            ?>
        </td>
        <td style="background-color: #CCCCCC" valign="top"><?php
            echo '<pre>';
            var_dump($_FILES);
            echo '</pre>';
            ?>
        </td>
        <td style="background-color: #EEEEEE" valign="top"><?php
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';
            ?>
        </td>
    </tr>
</table>
</body>
</html>
