<?php
namespace Greenery\Php\Classes\Sql;

use Greenery\Php\Classes\Controller\Controller;
/**
 * 
 */
class AddUser
{	
	private $controller;

	private $password;
	private $firstname;
	private $lastname;
	private $email;
	private $phone;

	function __construct($obj)
	{
		$this->controller = new Controller();

		$this->password = htmlspecialchars(isset($obj->password) ? $obj->password : null);
		$this->firstname = htmlspecialchars(isset($obj->firstname) ? $obj->firstname : null);
		$this->lastname = htmlspecialchars(isset($obj->lastname) ? $obj->lastname : null);
		$this->email = htmlspecialchars(isset($obj->email) ? $obj->email : null);
	}
	//check kung nag exist na ang username
	public function checkIfUserExist()
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

	public function addUser()
	{
	    $sql = "INSERT INTO user_tbl (firstname, lastname, email) VALUES (?, ?, ?)";

	    $array = [
	        'firstname' => $this->firstname,
	        'lastname' => $this->lastname,
	        'email' => $this->email,
	    ];

	    if ($this->checkIfUserExist())
	    {
	    	return "emailExisted";
	    }
	    else
	    {
	    	return $this->controller->insert($sql, $array);
	    }
	
	}

}