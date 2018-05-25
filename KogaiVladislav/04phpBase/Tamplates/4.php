<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 21.05.18
 * Time: 18:04
 */

include('../include/headerScripts.php');

$array = include('../functions_forms_tasks/4.php');
$func = $array['func'];

$dir = __DIR__ . DIRECTORY_SEPARATOR . '4';
$files = $func($dir);
if (!(is_array($files))) {
    $error = 'Не могу открыть директорию.';
} elseif (!$files) {
    $error = 'В директории нет файлов.';
}

?>

    <p class="lead">
        Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
    </p>

    <div class="panel panel-default">
        <div class="panel-body">
            <?php if (isset($error)): ?>
                <p class="alert alert-danger"><?= htmlentities($error) ?></p>
            <?php endif; ?>
            <?php if (!empty($files)): ?>
                <ul class="alert alert-success list-unstyled">
                    <?php foreach ($files as $file): ?>
                        <li><?= htmlentities($file) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

<?php
include('../include/footerScripts.php');
?>
