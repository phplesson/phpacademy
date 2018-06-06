<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.06.2018
 * Time: 15:40
 */

class Page
{
	public $content;
	
	public function get_all()
	{
		$db = new Database(HOST,USER,PASSWORD,DB);
		$result = $db->get_all_db();
		return $result;
	}
	
	public function get_one($articleId)
	{
        $db = new Database(HOST,USER,PASSWORD,DB);
        $result = $db->get_one_db($articleId);
        return $result;
	}
	
	public function get_body($content,$view)
	{
	    ob_start();
	    include 'views/'.$view.'.php';
	    return ob_get_clean();
	}
	
}