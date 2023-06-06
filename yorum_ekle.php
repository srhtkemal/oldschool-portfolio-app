<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serhatkemal";

// POST isteği ile gelen yorum verilerini alın
$isim = $_POST['isim'];
$mesaj = $_POST['mesaj'];

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Yorumu veritabanına ekle
$sql = "INSERT INTO yorumlar (isim, mesaj, tarih) VALUES ('$isim', '$mesaj', NOW())";

if ($conn->query($sql) === TRUE) {
    // Yorum ekleme işlemi başarılıysa index.php sayfasına yönlendir
    header('Location: index.php');
    exit;
} else {
    echo "Yorum eklenirken hata oluştu: " . $conn->error;
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
