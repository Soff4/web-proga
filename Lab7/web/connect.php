<?php
$host = 'localhost'; // або IP-адреса сервера баз даних
$dbname = 'dentist_db';
$username = 'root';
$password = '';

// Підключення до бази даних
$conn = new mysqli($host, $username, $password, $dbname);

// Перевірка на помилки підключення
if ($conn->connect_errno) {
    echo "Помилка підключення до бази даних: " . $conn->connect_error;
}
?>