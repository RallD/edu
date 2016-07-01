<?php

class AdminController{
	protected $error;
	public function actionAdd(){
		if(!empty($_POST)){
			$data = array();
			if(!empty($_POST['title'])){
				$data['title'] = $_POST['title']; 
			}else{
				$this->error = "error";
			}
			if(!empty($_POST['article'])){
				$data['article'] = $_POST['article']; 
			}else{
				$this->error = "error";
			}
			if($this->error == "error"){
				include __DIR__ . '/../views/news/error.php';
			}
			if(isset($data['title']) && isset($data['article'])){
				/*News_insert($data);*/
				if(News::newsInsert($data)){  //Статический метод вставки новости
					header('Location: /');
					die;
				}else{
					include __DIR__ . '/../views/news/error.php';
				}
			}
		}else{
			include __DIR__ . '/../views/news/form.php';
		}
		/*var_dump($data);
		$items = News::insertArticle();*/
	}
}