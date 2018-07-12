<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 16.06.18
 * Time: 5:20
 */
error_reporting(0xffffffff);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include('./vendor/autoload.php');

$config = include('./config/default.php');


$tagFactory = $config['tagFactory'];
$renderFactory = $config['renderFactory'];

/* @var \Html\Dz\Factory\ITagFactory|\Html\Dz\Factory\TagFactory $tagFactory*/
/* @var \Html\Dz\Factory\IRenderFactory $renderFactory*/

$tagFactory->setRenderFactory($renderFactory);



$br = $tagFactory->br([]);

$hr = $tagFactory->getTag('hr', ['class' => 'main-line', 'id' => 'hr1']);
echo $hr . $br;
echo 'text1' . $br;
$hr = $tagFactory->hr(['class' => 'main-line', 'id' => 'hr2']);
echo 'text2' . $br;
echo $hr . $br;

exit();
$form = $tagFactory->form(['id' => 'main-form', 'action' => 'GET', 'target' => '_self']);
$form->addObjContent($tagFactory->input(['name'=> 'name', 'value' => '', 'size' => 20]))
    ->addObjContent($tagFactory->br([]))
    ->addObjContent($tagFactory->input(['name'=> 'age', 'value' => '', 'size' => 20, 'type' => 'text']))
    ->addObjContent($tagFactory->br([]))
    ->addObjContent($tagFactory->input(['name'=> 'phone', 'value' => '', 'size' => 20, 'type' => 'tel']))
    ->addObjContent($tagFactory->br([]))
    ->addObjContent($tagFactory->input(['name'=> 'register_info', 'value' => 'send', 'size' => 10, 'type' => 'submit']));
