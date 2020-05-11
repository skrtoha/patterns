<?php
namespace AbstractFactory;
class MySQLDatabaseConnect implements IDatabaseConnect{
	private $mysqli;
	public function __construct(string $host, string $user, string $password, string $db){
		$this->mysqli = new \mysqli($host, $user, $password, $factory);
	}
	public function connection(){
		return $this->mysqli;
	}
}