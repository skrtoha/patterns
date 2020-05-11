<?php
namespace FabricMethod;
class FileSaveFactory implements ISaveFactory{
	public function __construct(string $filePath){
		$this->filePath = $filePath;
	}

	public function createSaver(): ISave
	{
		return new FileSave($this->filePath);
	}
}
