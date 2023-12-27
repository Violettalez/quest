<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "MykolayvQuest";

		
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM UsersFinale ORDER BY mistakes ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    $usersArray = array();
	    $count=0;
	    while($row = $result->fetch_assoc()) {
	        $user = array(
	            'name' => $row['name'],
	            'surname' => $row['surname'],
	            'phone' => $row['phone'],
	            'mistakes'=>$row['mistakes'],
	            'time'=>$row['timeQ'],
	            'timeEnd'=>$row['timeEnd']
	        );
	        $usersArray[] = $user;
	        $count++;
	        if($count>=20){break;}
	    }
	} else {
	    echo "0 результатов";
	}

	$sql = "SELECT * FROM UsersFinale ORDER BY CAST(timeQ AS SIGNED) ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    $usersArrayTime = array();
	    $count=0;
	    while($row = $result->fetch_assoc()) {
	        $userT = array(
	            'name' => $row['name'],
	            'surname' => $row['surname'],
	            'phone' => $row['phone'],
	            'mistakes'=>$row['mistakes'],
	            'time'=>$row['timeQ'],
	            'timeEnd'=>$row['timeEnd']
	        );
	        $usersArrayTime[] = $userT;
	        $count++;
	        if($count>=20){break;}
	    }
	} else {
	    echo "0 результатов";
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style_rating.css">
	<title>Rating</title>
</head>
<body>
	<h1>Рейтинг перших 20-ти учасників за кількістю помилок(від меньшого до більшого)</h1>
	<section>
			<table>
				<thead>
					<tr>
						<th>Ім'я</th>
						<th>Прізвище</th>
						<th>Телефон</th>
						<th>Кількість помилок</th>
						<th>Час проходження тесту (в мс.)</th>
						<th>Час завершення тесту</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    foreach ($usersArray as $user) {
                        echo "<tr>";
                        echo "<td>{$user['name']}</td>";
                        echo "<td>{$user['surname']}</td>";
                        echo "<td>{$user['phone']}</td>";
                        echo "<td>{$user['mistakes']}</td>";
                        echo "<td>{$user['time']}</td>";
                        echo "<td>{$user['timeEnd']}</td>";
                        echo "</tr>";
                    }
                ?>
				</tbody>
			</table>
	</section>
	<h1>Рейтинг перших 20-ти учасників за швидкістю проходження тесту(від меньшого до більшого)</h1>
		<section>
			<table>
				<thead>
					<tr>
						<th>Ім'я</th>
						<th>Прізвище</th>
						<th>Телефон</th>
						<th>Кількість помилок</th>
						<th>Час проходження тесту (в мс.)</th>
						<th>Час завершення тесту</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    foreach ($usersArrayTime as $user) {
                        echo "<tr>";
                        echo "<td>{$user['name']}</td>";
                        echo "<td>{$user['surname']}</td>";
                        echo "<td>{$user['phone']}</td>";
                        echo "<td>{$user['mistakes']}</td>";
                        echo "<td>{$user['time']}</td>";
                        echo "<td>{$user['timeEnd']}</td>";
                        echo "</tr>";
                    }
                ?>
				</tbody>
			</table>
		</section>
</body>
</html>