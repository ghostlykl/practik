<?php
// Подключение к базе данных
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydatabase';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Connection failed: '. $conn->connect_error);
}

// Запрос к базе данных
$sql = 'SELECT * FROM catalog';
$result = $conn->query($sql);

// Вывод данных 
$groupCount = 0;
while ($row = $result->fetch_assoc()) {
    if ($groupCount % 3 == 0) {
        // Если текущий элемент - первый в группе из трех
        echo "<div class='card-containerd'>";
    }
    echo "<div class='cardd'>";
    echo '<p class="card-titled">'. $row['title']. '</p>';
    // Сохранение изображения на сервере
    $imagePath = 'img/'. $row['title']. '.jpg';
    file_put_contents($imagePath, $row['image']);
    // Вывод изображения
    echo "<img src='". $imagePath. "' alt='". $row['title']. "'>";
    echo "<a href='card.php?catalog_id=" .$row ['id']."' class='btn-cardd'>Подробнее</a>";
    echo "</div>";

    $groupCount++;
    // Увеличиваем счетчик
    if ($groupCount % 3 == 0) {
        // Если текущий элемент - последний в группе из трех
        echo "</div>";
        // Закрываем контейнер группы
    }
}
?>
