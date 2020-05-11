<?php
namespace Observer;
class SendMailPlagin implements \SplObserver{
	public function update(\SplSubject $object, string $event = null, $data = []){
		echo "Send Email";
	}
}