<!DOCTYPE html>
<html>
	<head>
	  <title>Главная страница Новостной ленты</title>
	  <meta charset="utf-8" />
	</head>
	<body>
	<h1>Новости</h1>
	<?php foreach($items as $item): ?>
	<div>
		<h2><?php echo $item['title']; ?></h2>
		<p><?php echo $item['article']; ?></p>
	</div>
	<?php endforeach; ?>
	
	<br>
	<h2>Добавить новость</h2>
	<?php include __DIR__. '/form.php'; ?>
	</body>
</html>