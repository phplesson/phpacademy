<?php

include(__DIR__ . '/vendor/autoload.php');

$form = new \MyHtml\Form\Form();
$form->setAttribute('action', 'index.php')
    ->setContent(new \MyHtml\Form\Input(['name'=> 'name', 'value' => '', 'size' => 20]))
    ->setContent(new \MyHtml\Inline\BR())
    ->setContent(new \MyHtml\Form\Input(['name'=> 'age', 'value' => '', 'size' => 20, 'type' => 'text']))
    ->setContent(new \MyHtml\Inline\BR())
    ->setContent(new \MyHtml\Form\Input(['name'=> 'phone', 'value' => '', 'size' => 20, 'type' => 'tel']))
    ->setContent(new \MyHtml\Inline\BR())
    ->setContent(new \MyHtml\Form\Input(['name'=> 'register_info', 'value' => 'send', 'size' => 10, 'type' => 'submit']));

?>
<html>
<head>
    
</head>
<body>
    <div>
        <?=$form;?>
    </div>
</body>
</html>
