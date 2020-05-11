<?
namespace Builder;
interface ISQLQueryBuilder{
	public function select(array $fields);
	public function from(string $tableName);
	public function where(string $field, string $operator = '', string $value = '');
	public function limit(int $page, int $offset);
}