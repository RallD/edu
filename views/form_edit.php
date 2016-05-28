	<form action="/edit_article.php" method="POST">
		<label for="title">Название</label>
		<input type="text" id="title" name="title" value="<?php echo $item['title']; ?>" size="56"><br><br>
		<label for="title">Статья</label>
		<textarea rows="5" cols="45" name="article"><?php echo $item['article']; ?></textarea><br><br>
		<input type="hidden" name="id" value="<?=$id;?>"></input>
		<input type="submit" value="Редактировать новость">
	</form>