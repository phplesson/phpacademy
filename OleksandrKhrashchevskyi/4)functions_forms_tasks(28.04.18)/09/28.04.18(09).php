<?php
function send($arg){
    echo strrev($arg); // strrev — Переворачивает строку задом наперед
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['button']))

{
    $arg=htmlspecialchars($_POST['form']); // htmlspecialchars — Преобразует
                                // специальные символы в HTML-сущности
    send($arg);
}
?>


<style>

    .kod1{
        color: red;
    }
    .kod2{
        color:green;
    }

</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form
    method="post" action="28.04.18(09).php">
    <input type="text" name="form">
    <br />
    <input type="submit" name="button" value="PUSH" class="kod2">
    <input type="reset" name="button" value="DEL" class="kod1">

</form>
</body>
</html>

