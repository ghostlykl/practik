<?php
include 'config.php';

// Получение данных из формы
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Проверка совпадения пароля и повторения пароля
if ($password!== $confirm_password) {
    echo "Пароли не совпадают.";
    exit;
}

// Хеширование пароля
$password = password_hash($password, PASSWORD_DEFAULT);

// Подготовка запроса
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?,?,?)");
$stmt->bind_param("sss", $username, $email, $password);

// Выполнение запроса
if ($stmt->execute()) {
    echo "Пользователь успешно зарегистрирован.";
} else {
    echo "Ошибка при регистрации: ". $stmt->error;
}

// Закрытие соединения
$stmt->close();
$conn->close();
?>
