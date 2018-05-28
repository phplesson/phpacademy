<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 21:24
 * <p>7. Создать гостевую книгу, где любой человек может оставить комментарий в
 * текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.</p>

 */
function getDataDir()
{
    return __DIR__ . DIRECTORY_SEPARATOR . '7' . DIRECTORY_SEPARATOR . 'data';
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
            <?= htmlentities($comment['message']) ?>
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