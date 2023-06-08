<?php
// DB Infos, We Used MYSQL 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serhatkemal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("DB Connection Failed" . $conn->connect_error);
}

$sql = "SELECT * FROM yorumlar ORDER BY tarih DESC";
$result = $conn->query($sql);


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
    echo "You have No Comment Yet.";
}


$conn->close();
?>
