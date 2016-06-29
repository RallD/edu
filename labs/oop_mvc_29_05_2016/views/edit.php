<!DOCTYPE html>
<html>
	<?php foreach($items as $item): ?>
	<head>
	  <title>Редактировать новость <?php echo $item['title']; ?></title>
	  <meta charset="utf-8" />
	</head>
	<body>
		<h1><?php echo $item['title']; ?></h1>
		<p><?php echo $item['article']; ?></p><br>
		
		<h2>Редактировать новость</h2>
		<?php include __DIR__. '/form_edit.php'; ?><br>
		<a href="/">На главную страницу</a>
	</body>
	<?php endforeach; ?>
</html>