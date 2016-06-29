<?php
abstract class Article{
	abstract function Insert($data);
	abstract function GetOne($id);
	abstract function Update($data);
}


