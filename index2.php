<?php 
	$name=$_GET['name'];
	$surname=$_GET['surname'];
	$phone=$_GET['phone'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mykolaiv Quest</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="scripts/functions.js"></script>
	<script src="scripts/script.js"></script>
	<script src="scripts/main_func.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
	<p class="hidden_p" id="info" style="visibility: hidden;"><?php echo $name; ?> <?php echo $surname; ?> <?php echo $phone ?></p>
	<div class="conteiner">
		<div class="picture">
			<a href="https://www.facebook.com/MykolaivMMC/?locale=ru_RU" id="link" target="_blank">
				<img src="image/city.jpg" alt="city" id="photo">
			</a>
		</div>
		<div class="question">
			<h2 id="h2_nq">Запитання 1:</h2>
			<h1 id="h1_tq">Яке місто зображено на фото?</h1>
		</div>
		<div class="clue"><p id="clue" style="visibility: hidden;">Ви дали невірну відповідь :(  Спробуйте ще раз.</p></div>
		<div class="answers_var">
			<form>
			  <input class="answer" type="text" id="answer" placeholder="Введіть відповідь тут" autocomplete="off" onkeydown="return event.key != 'Enter';">
			</form>
		</div>
		<div class="button_next">
			<button class="a_button" onclick="answer()">Відповісти</button>
		</div>
	</div>
</body>
</html>