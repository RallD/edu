<?php
/*Автозагрузка классов*/
function __autoload($class){
	if(file_exists(__DIR__ . '/controllers/' . $class . '.php')){
		require __DIR__ . '/controllers/' . $class . '.php';
	}elseif(file_exists(__DIR__ . '/models/' . $class . '.php')){
		require __DIR__ . '/models/' . $class . '.php';
	}elseif(file_exists(__DIR__ . '/classes/' . $class . '.php')){
		require __DIR__ . '/classes/' . $class . '.php';
	}elseif(file_exists(__DIR__ . '/views/' . $class . '.php')){ // автозагрузка классов вью
		require __DIR__ . '/views/' . $class . '.php';
	}
}