<?php
namespace Greenery\Php\Classes\Sql;

use Greenery\Php\Classes\Controller\Controller;
/**
 * 
 */
class UpdateUser
{
	private $id;
	private $firstname;
	private $lastname;

	function __construct($obj)
	{
		$this->controller = new Controller();

		$this->id = htmlspecialchars(isset($obj->id) ? $obj->id : null);
		$this->firstname = htmlspecialchars(isset($obj->firstname) ? $obj->firstname : null);
		$this->lastname = htmlspecialchars(isset($obj->lastname) ? $obj->lastname : null);
		$this->email = htmlspecialchars(isset($obj->email) ? $obj->email : null);

	}
	// mag update og user firstname og lastname
	public function userUpdateInfo()
	{
		$sql = "UPDATE user_tbl SET firstname = ?, lastname = ? WHERE id = ?";

		$array = [
	    	'firstname' => $this->firstname,
	    	'lastname' => $this->lastname,
	    	'id' => $this->id,
	    ];

	    if($this->controller->update($sql, $array))
	    {
	    	return true;
	    }
	    else
	    {
	    	return false;
	    }
	}
	// mag update og user email 
	public function userUpdateEmail()
	{
		$sql = "UPDATE user_tbl SET email = ? WHERE id = ?";

		$array = [
	    	'email' => $this->email,
	    	'id' => $this->id,
	    ];

	    if($this->controller->update($sql, $array))
	    {
	    	return true;
	    
	    }else
	    {
	    	return false;
	    }
	}
}