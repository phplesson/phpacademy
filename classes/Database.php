<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.06.2018
 * Time: 15:39
 */

class Database
{
	public $db;
	
	public function __construct($host, $user, $password, $db)
	{
		$this->db = mysqli_connect($host, $user, $password);
		if (!$this->db) {
			exit('No connection with database');
		}
		if (!mysqli_select_db($this->db, $db)) {
			exit ('No table');
		}
		mysqli_query($this->db, "SET NAMES cp1251");
		
		return $this->db;
	}
	
	public function get_all_db()
	{
		$sql = "SELECT id, title, discription FROM cars LIMIT 10";
		$result = mysqli_query($this->db, $sql);
		if (!$result) {
			return FALSE;
		}
		for ($i = 0; $i < mysqli_num_rows($result); $i++) {
			$row[] = mysqli_fetch_array($result, MYSQLI_ASSOC);
		}
		return $row;
		
	}
	
	public function get_one_db()
	{
	}
}