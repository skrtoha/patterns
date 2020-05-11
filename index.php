<?php
require 'functions.php';
spl_autoload_register('project_autoload');

/*use Singletone\FileSave;
require 'functions.php';
$file = FileSave::getInstance();
$file->save(__DIR__);
$file = FileSave::getInstance();
$file->save(__DIR__);
$file = FileSave::getInstance();
$file->save(__DIR__);*/

/*use Multitone\FileSave;
$file = FileSave::getInstance('user-logs');
$file->save(__DIR__);
$file = FileSave::getInstance('system-logs');
$file->save(__DIR__);
$file = FileSave::getInstance('user-logs');
$file->save(__DIR__);
$file = FileSave::getInstance('system-logs');
$file->save(__DIR__);*/

/*use StaticFabric\FactoryInstance;
$obj = FactoryInstance::get('FactoryClass');
$obj->save();*/

/*use FabricMethod\MySQLSaveFactory;
use FabricMethod\FileSaveFactory;
$factory = new FileSaveFactory('testFile.txt');
$factory->createSaver()->save('hello World');
$factory = new MySQLSaveFactory('127.0.0.1', 'root', '', 'test');
$factory->createSaver()->save('hello World');*/

/*use AbstractFactory\MySQLDatabaseFactory;
$db = new MySQLDatabaseFactory('localhost', 'root', '', 'tahos');
$query = $db->query();
$query->setQuery("SET GLOBAL sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY' ,''));");
$query->execute();*/

/*$sql = (new Builder\MySQLQueryBuilder())
	->select(['id', 'brend_id', 'article'])
	->from('tahos_items')
	->where('id', '>', 1)
	->limit(0, 10)
	->getQuery();
var_dump($sql);
$db = new AbstractFactory\MySQLDatabaseFactory('localhost', 'root', '', 'tahos');
$query = $db->query();
$query->setQuery($sql);
print_r($query->execute());*/

/*$user = new Prototype\User('User');
$post = new Prototype\Post($user, 'First Post', 'Hello world');
$post->addComment('Hello');
$post2 = clone $post;
var_dump($post);
var_dump($post2);*/

$blog = new Observer\Blog;
$blog->title = "Hello world";
$blog->text = " Some text";
$blog->attach(new Observer\SendMailPlagin, 'all');
$blog->attach(new Observer\ChangeTextPlugin, 'blog: create');
$blog->attach(new Observer\ChangeTitlePlugin, 'blog: create');
$blog->attach(new Observer\ChangeTextPlugin, 'blog: update');
$blog->attach(new Observer\ChangeTitlePlugin, 'blog: update');
$blog->attach(new Observer\SendMailPlagin, 'blog: change');
$blog->attach(new Observer\SendMailPlagin, 'blog: change');
// print_r($blog);
// $blog->attach(new Observer\ChangeTitlePlugin, 'blog: create');

$blog->create();
echo $blog->title . "<br>";
echo $blog->text . "<br>";
