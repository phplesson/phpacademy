<?php
include 'config/config.php';
include 'classes/Page.php';
include 'classes/Database.php';

$page = new Page();

if (isset($_GET['articleId']) && is_int($_GET['articleId'])) {

} else {
	$text = $page->get_all();
	print_r($text);
}