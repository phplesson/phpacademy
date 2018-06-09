<?php
include 'config/config.php';
include 'classes/APage.php';
include 'classes/Page.php';
include 'classes/View.php';
include 'classes/Database.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($id != 0){
    	$view = new View();
        $content = $view->get_one($id);
        echo $view->get_body($content,'article');
    } else {
        exit('Wrong article id');
    }

} else {
	$page = new Page();
	$content = $page->get_all();
	echo $page->get_body($content,'main');
}