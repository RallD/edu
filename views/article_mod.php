<!DOCTYPE html>
<html>
	<?php foreach($items as $item): ?>
	<head>
	  <title>Редактирование новости <?php echo $item['title']; ?></title>
	  <meta charset="utf-8" />
	</head>
	<body>
		<h1>Редактирование новости <?php echo $item['title']; ?></h1>
		<form action="/mod.php" method="POST" enctype="multipart/form-data">
			<label for="title">Название</label>
			<input type="text" id="title" name="title" value="<?php echo $item['title']; ?>"><br><br>
			<label for="title">Статья</label>
			<textarea rows="5" cols="25" name="article"><?php echo $item['article']; ?></textarea><br><br>
			<input type="hidden" name="id" value="<?php echo $item['id']; ?>">
			<input type="submit" value="Редактировать новость">
		</form>		
		
		<a href="/">На главную страницу</a>
	</body>
	<?php endforeach; ?>
</html>