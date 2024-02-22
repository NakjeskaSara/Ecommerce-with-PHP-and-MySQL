<?php
$servername = "localhost"; // Променете го ако серверот не е на истата локација
$username = "root"; // Променете го со вашето корисничко име
$password = "root"; // Променете го со вашата лозинка
$database = "e-commerce"; // Променете го со името на вашата база на податоци

// Создавање на конекција
$conn = new mysqli($servername, $username, $password, $database);

// Проверка на конекцијата
if ($conn->connect_error) {
    die("Конекцијата не успеа: " . $conn->connect_error);
}

?>
