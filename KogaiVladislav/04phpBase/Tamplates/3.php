<?php
include('../include/headerScripts.php');
?>
<p class="lead">
        Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N
        задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
</p>
<?php
$array = include('../functions_forms_tasks/3.php');
$func = $array['func'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    $number1 = filter_input(INPUT_POST, 'number1', FILTER_VALIDATE_INT);
    if (!$number1) {
        $errors[] = 'Введите N.';
    }

    if (empty($_FILES['text1']) || !$_FILES['text1']['size'] || $_FILES['text1']['error'] != UPLOAD_ERR_OK ||
        mime_content_type($filename = $_FILES['text1']['tmp_name']) != 'text/plain'
    ) {
        $errors[] = 'Загрузите текстовый файл.';
    }

    if (empty($errors)) {
        $text1 = file_get_contents($filename);
        $result = $func($text1, $number1);
        $resultFilename = '3/result.txt';
        $resultPath = __DIR__ . DIRECTORY_SEPARATOR . $resultFilename;
        file_put_contents($resultPath, $result);
    } else {
        $error = join('<br>', $errors);
    }
}
?>

<div class="panel panel-default">
    <div class="panel-body">
        <?php if (isset($error)): ?>
            <p class="alert alert-danger"><?= htmlentities($error) ?></p>
        <?php endif; ?>
        <?php if (isset($resultFilename)): ?>
            <p class="alert alert-success"><a href="<?= htmlentities($resultFilename) ?>"
                                              target="_blank">Результат</a></p>
        <?php endif; ?>

        <form enctype="multipart/form-data" action="" method="post">
            <div class="form-group">
                <label for="number1">N</label>
                <input type="text" name="number1" id="number1" class="form-control"
                       value="<?= isset($number1) ? htmlentities($number1) : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="text1">Текст</label>
                <input type="file" name="text1" id="text1" accept="text/plain" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-default">Ок</button>
        </form>
    </div>
</div>

<?php
include('../include/footerScripts.php');
?>