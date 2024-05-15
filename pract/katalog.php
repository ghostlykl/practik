<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лис</title>
    <link rel="stylesheet" href="./styles/katalog.css">
    <link type="logo/x-icon" rel="shortcut icon" href="./img/logo.png">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body>
    <div class="container">
    <div class="header-container">
        <img class="header-logo" src="./img/logo.png">
        <a class="header-btn" href="index.html">Главная</a>
        <a class="header-btn" href="#">Каталог</a>
        <a class="header-btn" href="dev.html">О нас</a>
        <a class="header-btn1" href="./index.html#stairs-cont">Установка</a>
        <a class="header-btn2" href="./index.html#provider">Поставщикам</a>
        <a href="./recycle.html"><img class="list" src="./img/list.png"></a>
        <a href="./auth.html"><img class="lk-ico" src="./img/lk.png"></a>
        <div class="contacts-container">
            <div class="phone-img">
                <img class="phone-ico" src="./img/phone-ico.png">
            </div>
            <div class="text-cont">
                <p class="contacts-text">+7 (999) 999 99-99 <br> no-realy@svai35.ru</p>
            </div>
        </div>
    </div>
    <div class="cont-bread">
        <div class="bread">
            <ul class="breadcrumb">
                <li><a href="index.html">Главная страница</a></li>
                <li><b>Каталог</b></li>
            </ul>
        </div>
        <div class="head-str">
            <h1>Каталог</h1>
        </div>
    </div>
    <div class="katalog-container">
        <div class="product-list-card-container">
            <div class="card-list-container">
                <section class="content">
                    <?php include 'catalog.php';?>
                </section>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <img class="footer-logo" src="./img/logo.png">
        <div class="footer-left">
            <a class="footer-a-left" href="./index.html">Главная</a>
            <a class="footer-a-left" href="#">Каталог</a>
            <a class="footer-a-left" href="./dev.html">О нас</a>
        </div>
        <div class="footer-right">
            <a class="footer-a-left" href="./index.html#stairs-cont">Установка</a>
            <a class="footer-a-left" href="./index.html#provider">Поставщикам</a>
        </div>
        <div class="footer-contacts">
            <p class="footer-phone">Номер телефона:<br>
                +7 (999) 999 99-99</p>
            <p class="footer-email">Электронная почта:<br>  
                no-realy@svai35.ru</p>    
        </div>
        <a href="#"><img class="arrow" src="./img/arrow.png"></a>
        <p class="footer-copyright">&copy;Сваи35 2023-2024 </p>
    </div>
</body>
</html>