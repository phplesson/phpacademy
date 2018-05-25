<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 21.05.18
 * Time: 18:05
 */
include('../include/headerScripts.php');
$array = include('../functions_forms_tasks/9.php');
$func = $array['func'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text1 = filter_input(INPUT_POST, 'text1', FILTER_SANITIZE_STRING);

    if ($text1) {
        $result = $func($text1);
    } else {
        $error = 'Введите текст.';
    }
}

?>

<p class="lead">
    Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с
    помощью формы.
</p>

<div class="panel panel-default">
    <div class="panel-body">
        <?php if (isset($error)): ?>
            <p class="alert alert-danger"><?= htmlentities($error) ?></p>
        <?php endif; ?>
        <?php if (isset($result)): ?>
            <p class="alert alert-success"><?= htmlentities($result) ?></p>
        <?php endif; ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="text1">Текст</label>
                <textarea name="text1" id="text1" class="form-control" rows="3"
                          required><?= isset($text1) ? htmlentities($text1) : '' ?></textarea>
            </div>
            <button type="submit" class="btn btn-default">Ок</button>
        </form>
    </div>
</div>
<?php
include('../include/footerScripts.php');
?>