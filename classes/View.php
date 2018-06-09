<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06.06.2018
 * Time: 20:54
 */

class View extends APage
{
	public function get_one($articleId)
	{
		parent::get_one($articleId);
		return $this->text;
	}
	
}