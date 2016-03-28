<?php

require_once __DIR__ . '/../functions/sql.php';

function News_getAll(){
	$sql = 'SELECT * FROM news ORDER BY date DESC';
	return Sql_query($sql);
}

function News_getArticle($id){
	$sql = "SELECT * FROM news WHERE id='".$id."' ";
	return Sql_query($sql);
}

function News_insert($data){
	$sql = "
		INSERT INTO news
		(title, article, date)
		VALUES
		('" . $data['title'] . "', '" . $data['article'] . "', CURRENT_TIMESTAMP())
	 ";
	Sql_exec($sql);
}


