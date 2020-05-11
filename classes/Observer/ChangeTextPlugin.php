<?php
namespace Observer;
class ChangeTextPlugin implements \SplObserver{
	public function update(\SplSubject $object, string $event = null, $data = []){
		if (isset($object->text)) $object->text .= " Create event";
	}
}