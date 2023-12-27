<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
	<script src="scripts/func.js"></script>
</head>
<body>
	<div class="conteiner">
        <p class="reg_p">РЕЄСТРАЦІЯ</p>
        <form action="registration.php" autocomplete="off" method="post" class="reg_form">
            <label for="first_name">Ім'я:</label>
            <input class="reg_input" type="text" id="name" name="name" required>

            <label for="last_name">Прізвище:</label>
            <input class="reg_input" type="text" id="surname" name="surname" required>

            <label for="phone">Телефон:</label>
            <input class="reg_input" type="tel" id="phone" name="phone" required>

            <button class="reg_button" type="submit">Зареєструватися</button>
        </form>
        <a href="result.php">Кнопка для організаторів</a>
    </div>
</body>
</html>