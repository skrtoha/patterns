<?php
namespace FabricMethod;
class MySQLSave implements ISave{
	private $mysqli;

	public function __construct($host, $user, $password, $db){
		$this->mysqli = new \mysqli($host, $user, $password, $db);
	}

	public function save($message){
		$result = $this->mysqli->query("INSERT INTO `messages`(`text`) VALUES ('$message')");
	}
}