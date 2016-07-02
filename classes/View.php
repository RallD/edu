<?php

class View{
	public $data = array();
	public function assign($name, $value){
		$this->data[$name] = $value;
	}
	public function displayNews($template){
		if(!empty($this->data)){
			foreach($this->data as $key=>$value){
				$$key = $value;
			}
		}
		include __DIR__ . '/../views/news/' . $template;
	}
}