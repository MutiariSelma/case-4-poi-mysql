<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "casebased4";

$mysql = mysqli_connect($hostname, $username, $password, $database)
    or die("Gagal mengkoneksikan dengan database");

$query = "SELECT * FROM place";
$result = mysqli_query($mysql, $query);

$places = array();
while ($row = mysqli_fetch_assoc($result)) {
    $places[] = $row;
}

echo json_encode($places);

mysqli_free_result($result);
mysqli_close($mysql);
