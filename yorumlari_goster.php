<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serhatkemal";

$conn = new mysqli($servername, $username, $password, $dbname);

// Veritabanı bağlantısının başarısız olup olmadığını kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Yorumları veritabanından getir
$sql = "SELECT * FROM yorumlar ORDER BY tarih DESC";
$result = $conn->query($sql);

// Yorumları göster
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $isim = $row['isim'];
        $mesaj = $row['mesaj'];
        $tarih = $row['tarih'];

        echo "<div class='yorum'>";
        echo "<p><strong>$isim</strong></p>";
        echo "<p>$mesaj</p>";
        echo "<p class='tarih'>$tarih</p>";
        echo "</div>";
    }
} else {
    echo "Henüz yorum yok.";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>
