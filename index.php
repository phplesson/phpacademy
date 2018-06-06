<?php
include 'config/config.php';
include 'classes/Page.php';
include 'classes/Database.php';

$page = new Page();
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($id != 0){
        $content = $page->get_one($id);
        echo $page->get_body($content,'article');
    } else {
        exit('Wrong article id');
    }

} else {
	$content = $page->get_all();
	echo $page->get_body($content,'main');
}