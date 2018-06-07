<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.06.2018
 * Time: 15:40
 */

class Page extends APage
{
	public function get_all()
	{
		parent::get_all();
		return $this->text;
	}
}