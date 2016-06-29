<!DOCTYPE html>
<html>
	<?php foreach($items as $item): ?>
	<head>
	  <title><?php echo $item->title; ?></title>
	  <meta charset="utf-8" />
	</head>
	<body>
		<h1><?php echo $item->title; ?></h1>
		<p><?php echo $item->article; ?></p><br>
		<a href="/">На главную страницу</a>
	</body>
	<?php endforeach; ?>
</html>