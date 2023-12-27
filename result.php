<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		if($_POST['login']==="login"&& $_POST['password']==="password"){
			header('Location: rating.php');
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administration panel</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="conteiner">
		<p class="reg_p">ПАНЕЛЬ ОРГАНІЗАТОРА</p>
		<form method="post" class="reg_form" autocomplete="off">
			<div class="a_div">
				<label for="first_name">Введіть логін:</label>
	        	<input class="r_input" type="text" id="login" name="login" required>
			</div>
			<div class="a_div">
				<label for="first_name">Введіть пароль:</label>
	        	<input class="r_input" type="password" id="password" name="password" required>
			</div>
			<div>
				<button class="reg_button" type="submit">Отримати рейтинг</button>
			</div>
		</form>
	</div>
	
</body>
</html>