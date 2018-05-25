<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 21.05.18
 * Time: 18:04
 */


include('../include/headerScripts.php');
include('../functions_forms_tasks/7.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    if (!$name) {
        $errors[] = 'Введите имя.';
    }

    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    if (!$message) {
        $errors[] = 'Введите сообщение.';
    }

    if (empty($errors)) {
        $result = addComment($name, $message);
        if ($result) {
            // Успех
            unset($name);
            unset($message);
        } else {
            $error = 'Не могу сохранить комментарий.';
        }
    } else {
        $error = join('<br>', $errors);
    }
}

$comments = getComments();

?>

<p class="lead">
    Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все
    добавленные комментарии выводятся над текстовым полем.
</p>

<?php if (isset($error)): ?>
    <p class="alert alert-danger"><?= htmlentities($error) ?></p>
<?php endif; ?>

<?php if (!empty($comments)): ?>
    <?php foreach ($comments as $key => $comment): ?>
        <?php displayComment($comment); ?>
    <?php endforeach; ?>
<?php endif; ?>

<div class="panel panel-default">
    <div class="panel-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Имя</label><br>
                <input type="text" name="name" id="name" value="<?= isset($name) ? htmlentities($name) : '' ?>"
                       class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Сообщение</label><br>
                <textarea name="message" id="message" class="form-control"
                          rows="3" required><?= isset($message) ? htmlentities($message) : '' ?></textarea>
            </div>
            <button type="submit" class="btn btn-default">Ок</button>
        </form>
    </div>
</div>
<?php
include('../include/footerScripts.php');
?>