<?php
/**
 * реализует интерфейс IFactory
 */
namespace StaticFabric;
class FactoryClass implements IFactory{
	public function save(){
		echo "save data";
	}
}