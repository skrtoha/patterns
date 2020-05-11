<?php
namespace Observer;
class ChangeTitlePlugin implements \SplObserver{
	public function update(\SplSubject $object, string $event = null, $data = []){
		if (isset($object->title)) $object->title .= " Create event";
	}
}