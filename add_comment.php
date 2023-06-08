<?php
// DB Infos, We Used MYSQL 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serhatkemal";

$isim = $_POST['isim'];
$mesaj = $_POST['mesaj'];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("DB Connection Failed" . $conn->connect_error);
}
$sql = "INSERT INTO yorumlar (isim, mesaj, tarih) VALUES ('$isim', '$mesaj', NOW())";

if ($conn->query($sql) === TRUE) {
    // Redirect to index.php if everything is fine
    header('Location: index.php');
    exit;
} else {
    echo "Something went wrong during adding comment " . $conn->error;
}
$conn->close();
?>
