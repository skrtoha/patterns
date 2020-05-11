<?php
namespace Builder;
class MySQLQueryBuilder implements ISQLQueryBuilder{
	private $query;
	public function __construct(){
		$this->query = new \stdClass;
	}
	public function select(array $fields){
		$this->query->select = $fields;
		return $this;
	}
	public function from(string $tableName){
		$this->query->from = $tableName;
		return $this;
	}
	public function where(string $field, string $operator = '', string $value = ''){
		if (func_num_args() == 2) $this->query->where = "$field = '$operator'";
		else $this->query->where = "$field $operator $value";
		return $this;
	}
	public function limit(int $page, int $offset){
		$this->query->limit = "$page, $offset";
		return $this;
	}
	public function getQuery(){
		$sql = "SELECT ".implode(', ', $this->query->select);
		$sql .= " FROM {$this->query->from}";
		if (isset($this->query->where)) $sql .= " WHERE {$this->query->where}";
		if (isset($this->query->limit)) $sql .= " LIMIT {$this->query->limit}";
		return $sql;
	}
}