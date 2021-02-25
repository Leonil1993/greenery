<?php
namespace Greenery\Php\Classes\Sql;

use Greenery\Php\Classes\Controller\Controller;
/**
 * 
 */
class UserInfo
{	
	private $controller;

	private $id;
	private $email;
	private $password;
	
	function __construct($obj)
	{
		$this->controller = new Controller();

		$this->id = htmlspecialchars(isset($obj->id) ? $obj->id : null);
		$this->email = htmlspecialchars(isset($obj->email) ? $obj->email : null);
		$this->password = htmlspecialchars(isset($obj->password) ? $obj->password : null);

	}
	// id sa user
	private function userId()
	{
		$sql = "SELECT * FROM user_tbl WHERE email = ? ";

	    $array = [
	    	'email' => $this->email,
	    ];

	    foreach ($this->controller->select($sql, $array) as $key => $value)
	    {
	    	return $value->id;
	    }
	}
	// validate email sa admin metthod
	public function validateEmailAdmin()
	{
	    $sql = "SELECT * FROM admin_tbl WHERE email = ? ";

	    $array = [
	    	'email' => $this->email
	    ];

	    if($this->controller->select($sql, $array))
	    {
	    	return true;
	    }
	    else
	    {
	    	return false;
		}
	}
	// validate email metthod sa subscriber
	public function validateEmailSubs()
	{
	    $sql = "SELECT * FROM user_tbl WHERE email = ? ";

	    $array = [
	    	'email' => $this->email
	    ];

	    if($this->controller->select($sql, $array))
	    {
	    	return true;
	    }
	    else
	    {
	    	return false;
		}
	}
	// kuhaon ang password_hash par ae verify
	public function getPassword()
	{
		$sql = "SELECT * FROM admin_tbl WHERE email = ?";

	    $array = [
	    	'email' => $this->email
	    ];

	    foreach ($this->controller->select($sql, $array) as $key => $value)
	    {
	    	return $value->password;
	    }
	   
	}
	//mag validate username og password para mka login metthod
	public function validateEmailPassword()
	{
	    if ($this->validateEmailAdmin())
	    {
	    	if($this->password === $this->getPassword())
	    	{
	    		$_SESSION['admin'] = "admin";

	    		return true;
	    	}
	    }
	    else
	    {
	    	return false;
	    }
	}

	public function getAllUser()
	{
		$sql = "SELECT * FROM user_tbl WHERE id > ?";
		$array = [
	    	'id' => 0
	    ];

	    return $this->controller->select($sql, $array);
	}

	public function getUserData()
	{
		$sql = "SELECT * FROM user_tbl WHERE id = ? ";

	    $array = [
	    	'id' => $_SESSION['userID']
	    ];

	    return $this->controller->select($sql, $array);
	}

	// validate ang password para sa update password
	public function validatePasswordUpdate()
	{
	    if($this->password === $this->getPassword()){

	    	return true;
	    }
	    else
	    {
	    	return false;
	    }
	}
	//kuhaon ang user data para e edit single user ang ang e return
	public function getEditUser()
	{
		$sql = "SELECT * FROM user_tbl WHERE id = ?";

	    $array = [
	    	'id' => $this->id
	    ];

	    return $this->controller->select($sql, $array);
	}
}