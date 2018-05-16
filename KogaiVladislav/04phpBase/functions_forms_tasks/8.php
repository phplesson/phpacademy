<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 14.05.18
 * Time: 21:22
 * p>8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
 * Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение
 * "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.</p>

 */
return [
    'text' => 'Функция добавления комментариев с фильтрами от тегов и матов',
    'paramCount' => 1,
    'func' => function($text){
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

