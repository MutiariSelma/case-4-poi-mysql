<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "casebased4";

$mysql = mysqli_connect($hostname, $username, $password, $database) 
or die("Gagal mengkoneksikan dengan database");

$query = "SELECT * FROM place";
$result = mysqli_query($mysql, $query);

if (!$result) {
    die("Kesalahan dalam mengeksekusi kueri: " . mysqli_error($mysql));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Tempat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>

<?php
mysqli_free_result($result);
mysqli_close($mysql);
?>