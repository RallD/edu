<?php

class NewsController{
	 public function actionAll(){
		$items = News::getAll();
		$view = new View(); // создали объект 
		$view->assign('news', $items); // передали данные для показа 
		$view->displayNews('all.php'); // дали команду на показ шаблона с указанными ранее данными
	 }
	 public function actionOne(){
		$id = $_GET['id'];
		$item = News::getOne($id);
		$view = new View();
		$view->assign('new', $item);
		$view->displayNews('one.php');
	 }
}