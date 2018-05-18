<?php

 return [
 'text' => 'Guest Book.',
 'paramCount' => '1',
 'func' => function($comment){
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
                throw new Error('Enter comment or your user;');
            }
            $comments[]=$comment;
            save_comments($comments);
            //$arr = (implode(":", $comments));
            return var_dump($comments);
        }
    },
 'paramGenerator' => function() {
     },
 'view' => 'view/guestbook.php',
];