<?php
namespace AbstractFactory;
class MySQLDatabaseQuery implements IDatabaseQuery{
	private $connect;
	private $query;
	public function __construct(MySQLDatabaseConnect $connect){
		$this->connect = $connect;
	}
	public function setQuery(string $query){
		$this->query = $query;
	}
	public function execute(){
		return $this->connect->connection()->query($this->query);
	}
}
