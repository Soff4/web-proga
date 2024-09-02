<?php 
     ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
?>
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
                        Для керування послугами скористайтесь наступними формами.
                    </span>
                </div>
                <div class="container__forms">
                    <div class="form-wrapper">
                        <label>Створення нової послуги</label>
                        <form action="create_service.php" method="POST">
                            <label for="name">Назва послуги:</label>
                            <input type="text" id="name" name="name" required>
                            <label for="price">Ціна:</label>
                            <input type="number" id="price" name="price" min="0" step="0.01" required>
                            <button type="submit">Створити послугу</button>
                        </form>
                    </div>

                    <div class="form-wrapper">
                        <label>Редагування існуючої послуги</label>
                        <form action="edit_service.php" method="POST">
                            <label for="id">Унікальний ідентифікатор послуги:</label>
                            <input type="text" id="id" name="id" required>
                            <label for="name">Нова назва послуги:</label>
                            <input type="text" id="name" name="name" required>
                            <label for="price">Нова ціна:</label>
                            <input type="number" id="price" name="price" min="0" step="0.01" required>
                            <button type="submit">Зберегти зміни</button>
                        </form>
                    </div>

                    <div class="form-wrapper">
                        <label>Видалення існуючої послуги</label>
                        <form action="delete_service.php" method="POST">
                            <label for="id">Унікальний ідентифікатор послуги:</label>
                            <input type="text" id="id" name="id" required>
                            <button type="submit">Видалити послугу</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>