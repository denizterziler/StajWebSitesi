<?php
$servername = "localhost"; // Veritabanı sunucusu adı veya IP adresi
$username = "root"; // Veritabanı kullanıcı adı
$password = "root"; // Veritabanı şifresi
$dbname = "dersprog"; // Veritabanı adı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>