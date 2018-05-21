<?php
ini_set('session.save_path', '/Users/andrey/Sites/sessions');
//ini_set('upload_tmp_dir', '/Users/andrey/Sites/tmp2');
require_once('functions.php');
@session_start();
?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Файловая галлерея.</title>
 </head>
 <body>
<p>
 <a href="index.php?action=main">Главная</a> | <a href="index.php?action=upload">Загрузить</a> | <a href="index.php?action=gallery">Просмотреть</a> | <a href="index.php?action=stat">Статистика</a>
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
            echo uploadFiles();
        }
    break;
    case 'gallery':
        echo userGreetings();
        if(userLoggedIn()) {
            showFiles();
        }
    break;
    case 'stat':
        echo userGreetings();
    break;
    default:
        echo userGreetings();
}
echo '<pre>';
echo 'Your system tmp folder for uploads: '.ini_get('upload_tmp_dir').'<br><br>';
echo '$_POST array:'.'<br>';
var_dump($_POST);
echo '<br>';
echo '$_FILES array:'.'<br>';
var_dump($_FILES);
echo '<br>';
echo '$_SESSION array:'.'<br>';
var_dump($_SESSION);
echo '<br>';
echo '</pre>';
?>


</body>
</html>
