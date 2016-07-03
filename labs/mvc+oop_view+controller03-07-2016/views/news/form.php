<!DOCTYPE html>
<html>
	<head>
	  <title>Форма добавления новости</title>
	  <meta charset="utf-8" />
	</head>
	<body>
	<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST" enctype="multipart/form-data">
		<label for="title">Название</label>
		<input type="text" id="title" name="title"><br><br>
		<label for="article">Статья</label>
		<textarea rows="5" cols="25" name="article"></textarea><br><br>
		<input type="submit" value="Добавить новость">
	</form>
	</body>
</html>
	
