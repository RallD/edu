<?php
abstract class Article{
	public $title;
	public $text;
	abstract function Insert($data);
	abstract function GetAll();
	abstract function GetOne($id);
	abstract function Update($data);
}


