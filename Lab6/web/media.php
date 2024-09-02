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
                        Fun Facts About Dental History
                    </span>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CFjO3mQjg7k?si=j1urnWpIOOwpIRrT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    <span class="title__text">
                        The Wild History of Dentistry
                    </span>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6_FI-jGloLk?si=nA551OLwiXOEklk7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    <span class="title__text">
                        Toothpaste: A History of Oral Hygiene
                    </span>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ODmJJSaoYv8?si=N6l0OuZAGAhkxe0c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </main>
    </div>
</body>
</html>