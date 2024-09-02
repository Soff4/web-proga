<?php
    require_once('connect.php');

    if (isset($_POST['id'], $_POST['name'], $_POST['price'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];

        $query = "UPDATE services SET name = ?, price = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sdi", $name, $price, $id);

        if ($stmt->execute()) {
            header("Location: catalog.php");
        } else {
            echo "Помилка оновлення послуги: " . $stmt->error;
        }

        $conn->close();
    } else {
        echo "Будь ласка, заповніть всі поля форми.";
    }
?>
