<?
namespace AbstractFactory;
interface IDatabaseQuery{
	public function execute();
	public function setQuery(string $query);
}