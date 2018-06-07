<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.06.2018
 * Time: 20:28
 */
include 'IPage.php';

abstract class APage implements IPage
{
	protected $text;
	protected $db;

//	public function __construct()
//	{
//		$this->db= new Database(HOST, USER, PASSWORD, DB);
//	}
	
	public function get_all()
	{
		$this->db = $this->connect();
		$this->text = $this->db->get_all_db();
	}
	
	public function get_one($articleId)
	{
		$this->db = $this->connect();
		$this->text = $this->db->get_one_db($articleId);
	}
	
	protected function connect()
	{
		return new Database(HOST, USER, PASSWORD, DB);
	}
	
	public function get_body($content, $view)
	{
		ob_start();
		include 'views/' . $view . '.php';
		return ob_get_clean();
	}
}