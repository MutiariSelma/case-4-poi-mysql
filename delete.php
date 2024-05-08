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

$id = $_POST["id"];

$query = "DELETE FROM place WHERE id = $id";

$result = mysqli_query($mysql, $query);
if (!$result) {
    die("Kesalahan dalam mengeksekusi kueri: " . mysqli_error($mysql));
}

mysqli_close($mysql);
?>
