<?php
namespace FabricMethod;
class MySQLSaveFactory implements ISaveFactory{
	private $host, $user, $password, $db;

	public function __construct($host, $user, $password, $db){
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->db = $db;
	}

	public function createSaver(): ISave
	{
		return new MySQLSave($this->host, $this->user, $this->password, $this->db);
	}
}
