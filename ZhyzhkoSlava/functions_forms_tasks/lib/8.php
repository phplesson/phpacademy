<?php

return [
    'description' => 'function return all words that longer than N',
    'func' => function() {
        function save_comments($comment){
            return file_put_contents('comments.txt',serialize($comment));
        }
        function get_comments(){
           return unserialize(file_get_contents('comments.txt'));
        }
        if (file_exists('comments.txt')){
            $comments=get_comments();
        }
        $form_was_send=false;
        if (isset($_POST['submit'])){
            $form_was_send=true;
            $comment=[
                'user'=>$_POST['user'],
                'comment'=>$_POST['comment']
            ];
            if ($_POST['user']==null or $_POST['comment']==null){
                throw new Error('Enter comment or user;');
            }
            if (($_POST['comment']=="fuck") or ($_POST['comment']=="bitch")){
                echo "Некорректный комментарий!!!";
                exit;
            }
            $comments[]=$comment;
            save_comments($comments);

        }
        return var_dump($comments);               
    },
    'paramGenerator' => function () {
        //$lenght_world=$_POST['a'];
    },
    'argCount' => 0,
    'view' => 'view/guestbookwithex.php',
];