<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.06.2018
 * Time: 20:25
 */

interface IPage
{
	public function get_all();
	
	public function get_one($articleId);
	
	public function get_body($content, $view);
	
}