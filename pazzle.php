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

<div class="contentWrap">
	<div class="content">
		<div class="center">
			<h1>Игра в загадки</h1>

			<div class="box">

				<?php
					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){
						$userAnswer = $_GET["userAnswer1"];
						$score = 0;
						if($userAnswer == 'ёлка' || $userAnswer == 'ель' || $userAnswer == 'елка' || $userAnswer == 'сосна'){
							$score++;
						}

						$userAnswer = $_GET["userAnswer2"];
						if($userAnswer == 'лампа' || $userAnswer == 'лампочка'){
							$score++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if($userAnswer == 'гроза'){
							$score++;
						}

						echo "Вы угадали " . $score . " загадок";
					}

				?>

				<form method="GET">
					<p>Загадка №1. Зимой и летом одним цветом. Что это?</p>
					<input type="text" name="userAnswer1">

					<p>Загадка №2. Висит груша, нельзя скушать. Что это?</p>
					<input type="text" name="userAnswer2">

					<p>Загадка №3. Сперва блеск, за блеском - треск! Что это?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

			</div>

		</div>
	</div>
</div>
	
</div>

<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Katerina Stolyarova
</div>

</body>
</html>