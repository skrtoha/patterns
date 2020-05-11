<?php
namespace StaticFabric;
/**
 * получает объект класса, который реализует интерфейс IFactory
 */
class FactoryInstance{
	public static function get(string $type): IFactory
	{
		$type = "\StaticFabric\\$type";
		return new $type;
	}
}
