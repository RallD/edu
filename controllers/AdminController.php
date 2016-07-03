<?php

class AdminController{
	protected $error;
	public function actionAdd(){
		$view = new View();
		if(!empty($_POST)){
			$data = array();
			if(!empty($_POST['title'])){
				$data['title'] = $_POST['title']; 
			}
			if(!empty($_POST['article'])){
				$data['article'] = $_POST['article']; 
			}
			if(isset($data['title']) && isset($data['article'])){
					News::newsInsert($data);  //Статический метод вставки новости
					header('Location: /');
					die;
			}else{
				$view->displayNews('error.php');
			}
		}else{
			$view->displayNews('form.php');
		}
	}
}