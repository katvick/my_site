<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">

<?php
	include "menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
		<img src="img/photo.png">

		<div class="box_text">
			<p>Добрый день. Меня зовут Екатерина Столярова. Я совсем недавно начала программировать, однако уже недавно написала свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a>.</p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала:
			<a href="#">Главная</a>,
			<a href="#">Загадки</a>,
			<a href="#">Угадайка</a>
			</p>
		</div>
	</div>
</div>

<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Katerina Stolyarova
</div>

</body>
</html>