<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 21.05.18
 * Time: 18:04
 */
include('../include/headerScripts.php');
$array = include('../functions_forms_tasks/8.php');
$func = $array['func'];

function getForbiddenWords() //список нецензурных слов
{
    return ['рыба', 'рыбы', 'рыбе', 'рыбу', 'рыбой'];
}
function getDataDir()
{
    return __DIR__ . DIRECTORY_SEPARATOR . '8' . DIRECTORY_SEPARATOR . 'data';
}

function getDataCommentsPath()
{
    return getDataDir() . DIRECTORY_SEPARATOR . 'comments.txt';
}

function getComments()
{
    $fileComments = getDataCommentsPath();

    if (file_exists($fileComments)) {
        $result = array_map(function ($s) {
            return unserialize($s);
        }, file($fileComments));
        $result = array_reverse($result);
    } else {
        $result = false;
    }

    return $result;
}

function displayComment($comment)
{
    ?>
    <article class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><?= htmlentities($comment['name']) ?></h2>
        </div>
        <div class="panel-body">
            <?= $comment['message'] ?>
        </div>
        <div class="panel-footer text-right">
            <small><?= htmlentities($comment['date']) ?></small>
        </div>
    </article>
    <?php
}

function addComment($name, $message)
{
    $fileComments = getDataCommentsPath();

    $handler = fopen($fileComments, 'a');
    if (flock($handler, LOCK_EX)) {
        $date = date('d-m-Y H:i:s');
        $comment = compact('name', 'message', 'date');

        fwrite($handler, serialize($comment) . PHP_EOL);
        flock($handler, LOCK_UN);
        fclose($handler);

        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    if (!$name) {
        $errors[] = 'Введите имя.';
    } elseif (!$func($name)) {
        $errors[] = 'Некорректный комментарий.';
    }

    $message = htmlentities(strip_tags($_POST['message'], '<b>'));
    $message = str_ireplace(['&lt;b&gt;', '&lt;/b&gt;'], ['<b>', '</b>'], $message);
    if (!$message) {
        $errors[] = 'Введите сообщение.';
    } elseif (!$func($message)) {
        $errors[] = 'Некорректный комментарий.';
    }

    if (empty($errors)) {
        $result = addComment($name, $message);
        if ($result) {
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
    добавленные комментарии выводятся над текстовым полем. Реализовать проверку на наличие в тексте запрещенных
    слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из
    комментария всех тегов, кроме тега &lt;b&gt;.
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