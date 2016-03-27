<?php

require_once __DIR__ . '/../functions/sql.php';

function News_getAll(){
	$sql = 'SELECT * FROM news';
	return Sql_query($sql);
}

function News_insert($data){
	$sql = "
		INSERT INTO news
		(title, article)
		VALUES
		('" . $data['title'] . "', '" . $data['article'] . "')
	 ";
	Sql_exec($sql);
}


