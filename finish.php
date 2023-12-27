<?php
	$name = $_GET['name'];
	$surname = $_GET['surname'];
	$phone = $_GET['phone'];
	$time = $_GET['time'];
	$col_true_q = $_GET['col_true_q'];
	$col_q = $_GET['col_q'];
	$time_ms=$_GET['time_ms'];
	$end=$_GET['end'];
	$mistakes=$_GET['mistakes'];

	// Создаем подключение
	$conn = new mysqli("localhost", "root", "", "MykolayvQuest");

	// Проверяем подключение
	if ($conn->connect_error) {
	    die("Ошибка подключения: " . $conn->connect_error);
	}
	// SQL-запрос для добавления данных в таблицу
	$sql = "INSERT INTO `UsersFinale` (`name`, `surname`, `phone`,`mistakes`,`timeQ`,`timeEnd`) VALUES ('$name', '$surname', '$phone','$mistakes','$time_ms','$end')";

	if ($conn->query($sql) === TRUE) {
	    $conn->close();
	} else {
	    echo "Ошибка: " . $sql . "<br>" . $conn->error;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="scripts/functions.js"></script>
    <title>Finale</title>
</head>
<body>
    <div class="finale_conteiner">
        <h1>Вітаю! Ви пройшли квест!</h1>
        <p>Час проходження квесту: <?php echo $time; ?></p>
        <p>Кількість вірних відповідей: <?php echo $col_true_q; ?> / <?php echo $col_q; ?></p>
    </div>
</body>
</html>
