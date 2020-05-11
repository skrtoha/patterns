<?php
namespace AbstractFactory;
class MySQLDataBaseFactory implements IDatabaseFactory{
	protected $host, $user, $password, $db;
	public function __construct(string $host, string $user, string $password, string $db){
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->db = $db;
	}
	public function connect(): IDatabaseConnect
	{
		return new MySQLDatabaseConnect($this->host, $this->user, $this->password, $this->db);
	}
	public function query(): IDatabaseQuery
	{
		return new MySQLDatabaseQuery($this->connect());
	}
}