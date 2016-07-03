<?php

class View{
	protected $data = array();
	public function __set($key, $value){
		$this->data[$key] = $value;
	}
	public function __get($key){
		return $this->data[$key];
	}
	public function renderNews($template){
		if(!empty($this->data)){
			foreach($this->data as $key=>$value){
				$$key = $value;
			}
		}
		
		ob_start();
		include __DIR__ . '/../views/news/' . $template;
		$content = ob_get_contents();
		ob_end_clean();
		
		return $content;
	}
	public function displayNews($template){
		echo $this->renderNews($template);
	}
}