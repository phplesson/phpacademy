<?php
include('../include/headerScripts.php');
?>
<p class="lead">
    Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые
    есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию getCommonWords($a,
    $b), которая будет возвращать массив с общими словами.
</p>
<?php
$array = include('../functions_forms_tasks/1.php');
$global = $_POST;
?>

<div class="panel panel-default page-header">
    <div class="panel-body">
        <p> <?php

            echo '<h2>'.$array['text'].'</h2>';

            if (isset($global['text1']))
                echo 'Первый массив: '.$global['text1'].'<br>';

            if (isset($global['text2']))
                echo 'Второй массив: '.$global['text2'].'<br>';
            ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="text1">Текст 1</label><br>
                <textarea name="text1" id="text1" class="form-control" rows="3"
                          required><?= isset($text1) ? htmlentities($text1) : '' ?></textarea>
            </div>
            <div class="form-group">
                <label for="text2">Текст 2</label><br>
                <textarea name="text2" id="text2" class="form-control" rows="3"
                          required><?= isset($text2) ? htmlentities($text2) : '' ?></textarea>
            </div>
            <button type="submit" class="btn btn-default">Ок</button>
        </form>
        <?php

        error_reporting( E_ERROR );


        $function = $array['func'];
        echo '<h3>'. 'Ответ'. '</h3>';
        $result = $function($global['text1'],$global['text2']);
        if (isset($result)){
            echo '<pre>'.PHP_EOL;
            var_dump($result);
            echo '</pre>'.PHP_EOL;
        }
        ?>

        </p>

    </div>
</div>
<?php
include('../include/footerScripts.php');
?>