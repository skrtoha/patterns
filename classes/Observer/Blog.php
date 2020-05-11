<?php
namespace Observer;
class Blog implements \SplSubject{
	public $title;
	public $text;

	private $_observers = [];
	public function __construct(){
		$this->_observers['all'] = [];
	}
	public function attach (\SplObserver $observer, string $event = 'all'): void
	{
		$this->_observers[$event][] = $observer;
	}
	public function detach (\SplObserver $observer, string $event = 'all'): void
	{
		if (!isset($this->_observers[$even])) $this->_observers[$event] = [];
		$observers = array_merge($this->_observers[$event], $this->_observers['all']);
		foreach($observers as $key => $value){
			if ($value === $observer) unset($observers[$event][$key]);
		}
	}
	public function notify (string $event = 'all'): void
	{
		$observers = array_merge($this->_observers[$event], $this->_observers['all']);
		foreach($observers as  $key => $item){
			$item->update($this, $event);
		}
	}
	public function create(){
		echo "<br>create";
		$this->notify("blog: create");
	}
	public function update(){
		echo "<br>update";
		$this->notify("blog: update");
	}
	public function delete(){
		echo "<br>delete";
		$this->notify("blog: delete");
	}
}