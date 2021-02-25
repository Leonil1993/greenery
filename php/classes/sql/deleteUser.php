<?php
namespace Greenery\Php\Classes\Sql;

use Greenery\Php\Classes\Controller\Controller;
/**
 * 
 */
class DeleteUser
{	
	private $controller;
	private $id;

	function __construct($obj)
	{
		$this->controller = new Controller();

		$this->id = htmlspecialchars(isset($obj->id) ? $obj->id : null);
	}

	public function deleteUser()
	{
		$sql = "DELETE FROM user_tbl WHERE id = ?";

		$array = [
			'id' => $this->id
		];

		return $this->controller->delete($sql, $array);
	}
}