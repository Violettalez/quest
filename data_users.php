<?php  
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    // Проверка, что данные существуют
	    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phone'])) {
	        $name = $_POST['name'];
	        $surname = $_POST['surname'];
	        $phone = $_POST['phone'];
	    }
	}
?>