<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLES -->
    <link rel="stylesheet" href="./styles/style.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!-- TITLE -->
    <title>Smile Perfection</title>
</head>
<body>
    <?php 
        function active($currect_page){
            $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
            $url = end($url_array);  
            if($currect_page == $url){
                echo 'active';
            } 
        } 
    ?>
    <div class="layout">
        <header>
            <div class="header__container">
                <img src="./images/logo.png" alt="logoCompany">
                <nav class="header__navigation">
                    <a class="<?php active("index.php") ?>" href="index.php">Головна</a>
                    <a class="<?php active("about.php") ?>" href="about.php">Про нас</a>
                    <a class="<?php active("services.php") ?>" href="services.php">Послуги</a>
                    <a class="<?php active("contacts.php") ?>" href="contacts.php">Контакти</a>
                    <a class="<?php active("media.php") ?>" href="media.php">Медіа-дошка</a>
                </nav>
            </div>
        </header>
        <main>
            <div class="main__container">
                <div class="container__title">
                    <span class="title__text">
                        Для видалення, редагування або додавання нової послуги, зверніться за посиланням: <a href="manage_service.php">Детальніше</a>
                    </span>
                </div>
                <div class="container__table">
                    <?php
                        require_once('connect.php');
                        $query = "SELECT * FROM services";
                        $result = $conn->query($query);

                        if (!$result) {
                            echo "Помилка виконання запиту: " . $conn->error;
                        }

                        echo "<table width='500' border='1'>
                                <tr>
                                    <th>ID</th>
                                    <th>Назва</th>
                                    <th>Ціна (грн)</th>
                                </tr>";

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['price'] . "</td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                        $conn->close();
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>