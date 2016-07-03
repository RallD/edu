<?php

class NewsController{
	
	 public function actionAll(){
		$db = new DB();
		$res = $db->query(
			'SELECT * FROM news WHERE id=:id',
			[':id' => 12]
		);
		var_dump($res);
		die;
		/*$items = News::getAll();
		$view = new View(); // создали объект 
		$view->items = $items;
		$view->displayNews('all.php'); // дали команду на показ шаблона с указанными ранее данными*/
	 }
	 public function actionOne(){
		$id = $_GET['id'];
		$item = News::getOne($id);
		$view = new View();
		$view->item = $item;
		$view->displayNews('one.php');
	 }
	 public function actionIterator(){
		$it = new myIteratorRight;
		foreach($it as $key => $value) {
			var_dump($key, $value);
			echo "\n";
		}
	 }
}