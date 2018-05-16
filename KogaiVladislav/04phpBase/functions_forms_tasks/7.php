<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 21:24
 * <p>7. Создать гостевую книгу, где любой человек может оставить комментарий в
 * текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.</p>

 */
return [
    'text' => 'Функция добавления комментариев',
    'paramCount' => 1,
    'func' => function(){
        $ar = $_REQUEST;
        $user = $ar['username'].' : '.$ar['msg'].'|';

        file_put_contents('.txt',$user,FILE_APPEND);

        echo '<div name="lala">';

        $file = file_get_contents('.txt');
        $data = explode('|',$file);
        foreach ($data as $key){
            list($name, $comment) = preg_split('[:]',$key);
            echo printf('%s8',$name.' : '.$comment.'<br>');
        }

        echo '</div>';
        echo '<form action="" method="post" enctype="multipart/form-data">';
        echo '<input name="username" required placeholder="name">';
        echo '<br><textarea name="msg" rows="10"></textarea>';
        echo '<br><br>';
        echo '<input type="submit" name="ok" value="Отправить" >';
        echo '</form>';
    },
    'paramGenerator' => function(){
        $text = 'NONE';
        return [$text];
    }
];