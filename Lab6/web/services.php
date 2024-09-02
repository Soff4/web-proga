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
                    В нашій клініці ми пропонуємо інноваційну систему оцінювання пакету "Смайл", яка допомагає нашим пацієнтам вибрати найбільш підходящий варіант для досягнення бажаного результату. Незалежно від вашого досвіду та потреб, ми гарантуємо індивідуальний підхід та високу якість обслуговування.
                    </span>
                </div>

                <div class="container__infocard">
                    <div class="card-info">
                        <h3>Пакет послуг "Новачок"</h4>
                        <span>Для тих, хто тільки починає свій шлях до ідеального посмішки. Пакет "Новачок" включає в себе початковий огляд, чистку та рекомендації щодо догляду за зубами.</span>
                        <span>5.000 грн</span>
                        <a href="?service=1">Замовити</a>
                    </div>

                    <div class="card-info">
                        <h3>Пакет послуг "Бувалий"</h4>
                        <span>Для тих, хто вже має деякий досвід у догляді за зубами та бажає покращити свою усмішку. Пакет "Бувалий" включає в себе професійну чистку, полірування та консультацію щодо косметичних процедур.</span>
                        <span>12.500 грн</span>
                        <a href="?service=2">Замовити</a>
                    </div>

                    <div class="card-info">
                        <h3>Пакет послуг "Експерт"</h4>
                        <span>Для тих, хто прагне досягти ідеальної усмішки за допомогою передових технологій та професійного підходу. Пакет "Експерт" включає в себе комплексну оцінку стану зубів, виправлення недоліків та косметичні процедури.</span>
                        <span>19.500 грн</span>
                        <a href="?service=3">Замовити</a>
                    </div>

                    <div class="card-info">
                        <h3>Пакет послуг "Голівуд"</h4>
                        <span>Для тих, хто мріє про справжню голлівудську усмішку, яка вразить всіх навколо. Пакет "Голівуд" включає в себе високотехнологічні косметичні процедури, виправлення недоліків форми та кольору зубів, а також індивідуальний підхід до кожного клієнта.</span>
                        <span>25.500 грн</span>
                        <a href="?service=4">Замовити</a>
                    </div>
                </div>
                
                <div class="container__feedback">
                    <?php
                        $service = isset($_GET['service']) ? $_GET['service'] : 1;
                    ?>

                    <?php
                        echo "<img src='gd.php?service=$service' alt='Smile Feedback'>";
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>