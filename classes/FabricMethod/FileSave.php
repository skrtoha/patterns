<?php
namespace FabricMethod;
class FileSave implements ISave{
	private $filePath;

	public function __construct($filePath){
		$this->filePath = $filePath;
	}

	public function save($message){
		file_put_contents($this->filePath, $message);
	}
}