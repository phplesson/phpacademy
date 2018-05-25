<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 21.05.18
 * Time: 17:12
 */

 $array = include('../functions_forms_tasks/2.php');
 $global = $_POST;

 include('../include/headerScripts.php');

?>

<p class="lead">
    Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
    Реализовать с помощью функции.
</p>
    <div class="panel panel-default">
        <div class="panel-body">
        <?php
            echo '<h2>'.$array['text'].'</h2>';

            if (isset($global['text1']))
             echo 'Заданая строка: '.$global['text1'].'<br>';
        ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="text1">Текст</label><br>
                    <textarea name="text1" id="text1" class="form-control" rows="3"
                              required><?= isset($text1) ? htmlentities($text1) : '' ?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Ок</button>
            </form>
            <?php

            error_reporting( E_ERROR );

            $function = $array['func'];
            echo '<h3>'. 'Ответ'. '</h3>';
            $result = $function($global['text1']);
            if (isset($result)){
                echo '<pre>'.PHP_EOL;
                var_dump($result);
                echo '</pre>'.PHP_EOL;
            }
            ?>
        </div>
    </div>
<?php
include('../include/footerScripts.php');
?>