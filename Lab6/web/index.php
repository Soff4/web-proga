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
                        На порозі "Smile Perfection" відчиняються двері до світу досконалих посмішок та бездоганного здоров'я ротової порожнини. Наша клініка пропонує найсучасніші стоматологічні послуги, поєднуючи інноваційні технології з професіоналізмом та турботливим ставленням до кожного пацієнта.
                    </span>
                    <span class="title__text">
                        В атмосфері затишку та комфорту команда висококваліфікованих лікарів піклується про ваші потреби, прагнучи подарувати вам посмішку, гідну голлівудської кінопрем'єри. Від профілактики до складних відновлювальних процедур – ми забезпечимо найвищий рівень обслуговування та індивідуальний підхід до кожного випадку.
                    </span>
                    <span class="title__text">
                        Запрошуємо вас відкрити для себе світ "Smile Perfection" – місце, де турбота про ваше здоров'я та краса посмішки стають нероздільними.
                    </span>
                </div>

                <div class="container__infocard">
                    <div class="card-info">
                        <h3>Знижка для військовослужбовців!</h4>
                        <span>Спеціальна знижка для військовослужбовців та ветеранів! В знак вдячності за службу та самопожертву ми пропонуємо 20% знижку на всі стоматологічні послуги для діючих військовослужбовців та ветеранів. Просто назвіть промокод "HEROSMILE" під час запису на прийом.</span>
                        <a href="contacts.php">Детальніше</a>
                    </div>

                    <div class="card-info">
                        <h3>Безкоштовна консультація!</h4>
                        <span>Безкоштовна консультація для нових пацієнтів! Ми цінуємо ваше довір'я, тому для всіх нових пацієнтів пропонуємо безкоштовну консультацію з досвідченим лікарем-стоматологом. Дізнайтесь більше про стан вашого здоров'я та отримайте індивідуальний план лікування без жодних зобов'язань.</span>
                        <a href="contacts.php">Детальніше</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>