<?php
namespace Greenery\Php\Classes\Controller;

use Greenery\Php\Classes\Controller\ServerConnect;
/**
 * 
 */
class Controller
{
	private $pdo;
	private $pdoConn;

	public function __construct()
	{
		$this->pdo = new ServerConnect('localhost', 'root', '', 'greenery_db');
		$this->pdoConn = $this->pdo->connect();
	}

	public function select($sql, $array)
	{

		$stmt = $this->pdoConn->prepare($sql);
		$stmt->execute(array_values($array));

		return $stmt->fetchAll();
	}

	public function update($sql, $array)
	{

		$stmt = $this->pdoConn->prepare($sql);

		return $stmt->execute(array_values($array));
	}

	public function delete($sql, $array)
	{

		$stmt = $this->pdoConn->prepare($sql);

		return $stmt->execute(array_values($array));
	}

	public function insert($sql, $array)
	{

		$stmt = $this->pdoConn->prepare($sql);

		return $stmt->execute(array_values($array));
	}
}