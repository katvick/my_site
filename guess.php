<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		
		var answer = parseInt(Math.random() * 100);
		var playerNumber = 1;

		function readInt(){ // как prompt
			var number = document.getElementById('userAnswer').value;
			return parseInt(number);
			// return +document.getElementById('userAnswer').value;
		}

		function write(text){ // как alert
			document.getElementById('info').innerHTML = text; // innerHTML - положить в HTML значение text
		}

		function hide(id){
			document.getElementById(id).style.display = 'none'; //скрытие элемента по id
		}

		function playerChange(){
			if (playerNumber == 1)
				playerNumber = 2;
			else 
				playerNumber = 1;
		}

		function guess(){
			
			var userAnswer = readInt();
			if (userAnswer == answer) {
				write("<b>Поздравляем, вы угадали!</b> Выиграл Игрок " + playerNumber + ".");
				hide('button');
				hide('userAnswer');
			} else if (userAnswer > answer) {
				playerChange();
				write("Ваше число слишком большое.<br>Теперь ходит Игрок " + playerNumber + ":");
			} else if (userAnswer < answer) {
				playerChange();
				write("Ваше число слишком маленькое.<br>Теперь ходит Игрок " + playerNumber + ":");
			} else if (userAnswer < 0) {
				playerChange();
				write("Число должно быть положительным.<br>Теперь ходит Игрок " + playerNumber + ":");
			}

		}
		
	</script>
</head>
<body>

<div class="content">

<?php
	include "menu.php";
?>

<div class="contentWrap">
	<div class="content">
		<div class="center">
			<h1>Игра угадайка</h1>

			<div class="box">
				
				<p id="info">Угадайте число от 0 до 100. Ходит Игрок 1.</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onclick="guess();" id="button">Начать</a>

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