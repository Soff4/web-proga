<?php
    require_once('connect.php');

    if (isset($_POST['name'], $_POST['price'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];

        $query = "INSERT INTO services (name, price) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sd", $name, $price);

        // Виконання запиту
        if ($stmt->execute()) {
            header("Location: catalog.php");
        } else {
            echo "Помилка створення послуги: " . $stmt->error;
        }

        $conn->close();
    } else {
        echo "Будь ласка, заповніть всі поля форми.";
    }
?>
