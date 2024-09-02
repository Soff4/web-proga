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
                        Зв'язатися з нами легко та зручно! Ми відкриті для спілкування різними шляхами, щоб ви могли вибрати найзручніший варіант.
                    </span>

                    <div class="title__wrapper">
                        <span class="wrapper-text">
                            <b>Міський:</b> +38 (032) 225-67-89
                        </span>
                        <span class="wrapper-text">
                            <b>Мобільний</b>: +38 (067) 345-67-89
                        </span>
                        <span class="wrapper-text">
                            <b>Електронна пошта:</b> info@smileperfection.ua
                        </span>
                        <span class="wrapper-text">
                            <b>Instagram:</b> @smileperfection_dental
                        </span>
                    </div>

                    <span class="title__text">
                        Ви також можете надіслати нам повідомлення через месенджери, такі як Viber, Telegram або WhatsApp, за номером +38 (067) 345-67-89.
                    </span>

                    <span class="title__text">
                        Незалежно від обраного способу зв'язку, наша доброзичлива команда завжди готова відповісти на ваші запитання, допомогти із записом на прийом або надати будь-яку іншу інформацію стосовно наших послуг.
                    </span>

                    <span class="title__text">
                        Чекаємо на можливість привітати вас у нашій клініці та подарувати посмішку вашої мрії!
                    </span>
                </div>
            </div>
        </main>
    </div>
</body>
</html>