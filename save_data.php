<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "casebased4";

$mysql = mysqli_connect($hostname, $username, $password, $database) 
or die("Gagal mengkoneksikan dengan database");

if ($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("Location: index.php");
    exit();
}
 
$nama = $_POST["nama"];
$kategori = $_POST["kategori"];
$deskripsi = $_POST["deskripsi"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];

$query = "INSERT INTO place (name, description, lat, lng, ctgry) VALUES ('$nama', '$deskripsi', $lat, $lng, '$kategori')";

$result = mysqli_query($mysql, $query);
if (!$result) {
    die("Kesalahan dalam mengeksekusi kueri: " . mysqli_error($mysql));
}
