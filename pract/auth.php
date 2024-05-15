<?php
include 'config.php';

// Получение данных из формы
$email = $_POST['email'];
$password = $_POST['password'];

// Подготовка запроса для проверки данных пользователя
$stmt = $conn->prepare("SELECT * FROM users WHERE email =?");
$stmt->bind_param("s", $email);

// Выполнение запроса
$stmt->execute();
$result = $stmt->get_result();

// Проверка, найден ли пользователь
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Проверка пароля
    if (password_verify($password, $user['password'])) {
        session_start(); // Начало сессии
        $_SESSION['loggedin'] = true; // Установка флага входа в систему
        $_SESSION['username'] = $user['username']; // Сохранение имени пользователя
        header("Location: lk.html"); // Перенаправление на страницу управления
        exit;
    } else {
        echo "Неверный пароль.";
    }
} else {
    echo "Пользователь не найден.";
}

// Закрытие соединения
$stmt->close();
$conn->close();
?>
