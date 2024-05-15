<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лис</title>
    <link rel="stylesheet" href="./styles/card.css">
    <link type="logo/x-icon" rel="shortcut icon" href="./img/logo.png">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
    <div class="container">
        <div class="header-container">
            <img class="header-logo" src="./img/logo.png">
            <a class="header-btn" href="index.html">Главная</a>
            <a class="header-btn" href="katalog.php">Каталог</a>
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
                    <li><a href="katalog.php">Каталог</a></li>
                    <li class="li2"><b>Свая забивная</b></li>
                </ul>
            </div>
        </div>

        <?php
// Подключение к базе данных
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydatabase';

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// ID продукта, который мы хотим найти
$catalog_id = $_GET['catalog_id'];

// SQL запрос для получения данных продукта по ID
$sql = "SELECT id, title, image, dlina, width, height, ves, obem, price FROM catalog WHERE id = $catalog_id";

// Выполнение запроса
$result = $conn->query($sql);

// Проверка, были ли найдены данные
if ($result->num_rows > 0) {
    // Вывод данных каждого продукта
    while($row = $result->fetch_assoc()) {           
    // Сохранение изображения на сервере
    $imagePath = 'img/'. $row['title']. '.jpg';
    file_put_contents($imagePath, $row['image']);
    echo "<div class='container-cat'>";
    // Вывод изображения
        echo "<img class='card-tovar' src='". $imagePath. "' alt='". $row['title']. "'>";
        echo "<div class='card-tv'>";
            echo "<div class='card-title'>";
                echo $row["title"]. "<br>";
            echo "</div>";
            echo "<div class='card-textt'>";
            echo $row["dlina"]. "<br>"; 
            echo "</div>";
            echo "<div class='card-textt'>";
            echo $row["width"]. "<br>";
            echo "</div>";
            echo "<div class='card-textt'>";
            echo $row["height"]. "<br>";
            echo "</div>";
            echo "<div class='card-textt'>";
            echo $row["ves"]. "<br>";
            echo "</div>";
            echo "<div class='card-textt'>";
            echo $row["obem"]. "<br>";
            echo "</div>";
            echo "<div class='price'>";
                echo $row["price"]. "<br>";
            echo "</div>";
            echo "<a href='recycle.html' class='btn-cardd'>Заказать</a>";
        echo "</div>";
    echo "</div>";
    }
} else {
    echo "No results found.";
}

// Закрытие соединения
$conn->close();
?>
</div>
    </div>
    <div class="footer">
        <img class="footer-logo" src="./img/logo.png">
        <div class="footer-left">
            <a class="footer-a-left" href="./index.html">Главная</a>
            <a class="footer-a-left" href="./katalog.php">Каталог</a>
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