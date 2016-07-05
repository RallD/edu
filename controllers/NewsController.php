<?php

class NewsController{
	
	 public function actionAll(){
		var_dump(
			NewsModel::findOnebyId(12)
		);
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