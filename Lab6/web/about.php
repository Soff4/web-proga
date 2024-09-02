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
                        У "Smile Perfection" ми пишаємося нашою професійною командою висококваліфікованих стоматологів, які присвятили своє життя догляду за здоров'ям ротової порожнини та естетикою посмішок. Наші лікарі регулярно відвідують курси підвищення кваліфікації та семінари, щоб бути в курсі найновіших досягнень у галузі стоматології.
                    </span>
                    <span class="title__text">
                        Крім того, ми використовуємо передове обладнання від провідних світових виробників, що дозволяє нам забезпечити максимальну точність діагностики та ефективність лікування. Усі наші інструменти та матеріали відповідають найвищим стандартам якості, гарантуючи безпеку та довговічність результатів.
                    </span>
                    <span class="title__text">
                        Ми ретельно підбираємо медикаменти та витратні матеріали від перевірених виробників, щоб забезпечити найкращий догляд за вашим здоров'ям. Ваше благополуччя є нашим головним пріоритетом, тому ми приділяємо особливу увагу якості всіх використовуваних нами препаратів.
                    </span>

                    <div class="title__wrapper">
                        <span class="wrapper-text">
                            Графік роботи:
                        </span>
                        <span class="wrapper-text">
                            Пн-Пт: 9:00 - 18:00
                        </span>
                        <span class="wrapper-text">
                            Сб: 9:00 - 17:00
                        </span>
                        <span class="wrapper-text">
                            Нд: вихідний (за індивідуальним записом)
                        </span>
                    </div>  

                    <div class="title__wrapper">
                        <span class="wrapper-text">
                           <b>Адреса:</b> вулиця Політехнічна, Київ, 02000
                        </span>
                    </div>

                    <div class="frame__wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1270.3438039681928!2d30.45374602676221!3d50.44691919586115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc27725b49d7%3A0xd00801d72ba54c32!2z0KHQutCy0LXRgCDQuNC8LiDQldC70LXQvdGLINCi0LXQu9C40LPQuA!5e0!3m2!1sru!2sua!4v1714157392501!5m2!1sru!2sua" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>