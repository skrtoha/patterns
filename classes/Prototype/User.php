<?php
namespace Prototype;
class User{
	private $firstname;
	private $posts = [];
	public function __construct($firstname){
		$this->firstname = $firstname;
	}
	public function addPost($post){
		$this->post[] = $post;
	}
}