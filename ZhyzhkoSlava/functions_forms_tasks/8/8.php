<?php
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
//    echo "<pre>";
//    print_r($comments);
//    echo "</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="container">
    <form action="8.php" method="post">
        <div class="form-group">
            <label for="user">Your user:</label>
            <input type="text" name="user" class="form-control" id="user" placeholder="user">
        </div>
        <div class="form-group">
            <label for="comment">Your com:</label>
            <input type="text" name="comment" class="form-control" id="comment" placeholder="comment">
        </div>
      <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    <?php if (file_exists('comments.txt')): ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>User:</td>
            <td>Comment:</td>
        </tr>
        </thead>
        <?php for ($i=0;$i<count($comments);$i++):?>
        <tbody>
        <tr>
            <td><?=$comments[$i]['user']   ?></td>
            <td><?=$comments[$i]['comment']   ?></td>
        </tr>
        </tbody>
        <?php endfor; ?>
    </table>
    <?php endif; ?>
    </div>
</body>
</html>