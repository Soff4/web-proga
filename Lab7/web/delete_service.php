<?php
    require_once('connect.php');

    // Перевірка, чи надійшли всі необхідні дані з форми
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Підготовлений запит для видалення запису
        $query = "DELETE FROM services WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);

        // Виконання запиту
        if ($stmt->execute()) {
            header("Location: catalog.php");
        } else {
            echo "Помилка видалення послуги: " . $stmt->error;
        }

        $conn->close();
    } else {
        echo "Будь ласка, вкажіть ідентифікатор послуги для видалення.";
    }
?>
