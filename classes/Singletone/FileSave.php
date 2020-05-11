<?php
namespace Singletone;
/**
 * Singleton используется тогда, когда необходимо сделать создание только одного
 * экземпляра класса. 
 */
class FileSave{
	private $filePath;
	private static $_instance = null;

	/**
	 * сделано приватным, чтобы было невозможно создание экземляра класса 
	 * напрямую
	 */
	private function __construct(){
		$this->filePath = md5(microtime() . '.txt');
	}

	/**
	 * возвращает экземпляр класса FileSave, если он уже существует то просто 
	 * возвращается, если нет, то создается новый
	 * @return [type] [description]
	 */
	public static function getInstance(): FileSave
	{
		if (self::$_instance === null){
			self::$_instance = new static();
		}
		return self::$_instance;
	}

	public function save($dir){
		$content = "text ";
		if (file_exists($dir . '/' . $this->filePath)){
			$content = file_get_contents($dir . '/' . $this->filePath) . $content;
		}
		file_put_contents($dir . '/' . $this->filePath, $content);
	}
	private function __clone(){}

}
