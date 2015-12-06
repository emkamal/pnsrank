<?php

function connect()
{
    $servername = "hackathon.muharif.net";
    $username = "kampung";
    $password = "kampring";
    $dbname = "matalayan";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

$conn = connect();

$idPNS = 1;
$KTP = mysqli_real_escape_string($conn, $_POST['inputKTP']);
$name = mysqli_real_escape_string($conn, $_POST['inputName']);
$email = mysqli_real_escape_string($conn, $_POST['inputEmail']);
$phone = mysqli_real_escape_string($conn, $_POST['inputPhone']);
$idCity = mysqli_real_escape_string($conn, $_POST['inputCity']);
$idPelayanan = mysqli_real_escape_string($conn, $_POST['inputPelayanan']);
$inputInfo = mysqli_real_escape_string($conn, $_POST['inputInfo']);
$tanggal = date('Y-m-d H:i:s');

$result = mysqli_query($conn, "INSERT INTO inputPelayanan (idPelayanan, idPNS, tanggal, deskripsi, NamaWarga, NoTelpWarga, EmailWarga)
  VALUES ('$idPelayanan', '$idPNS', '$tanggal', '$inputInfo', '$name', '$phone', '$email');");
if ($result) {
    $message="successfully sent the query!!";
    echo 'alert("Data tersimpan di pusat, warga akan menerima SMS / Email untuk memberi rating")';
}

mysqli_close($conn);


$conn = connect();

$sql = "SELECT idInputPelayanan FROM inputPelayanan ORDER BY idInputPelayanan DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$komenArray = array(
    1 => "Kok saya diminta uang tambahan ya?",
    2 => "Petugasnya lambat",
    3 => "Biasa aja",
    4 => "OK",
    5 => "Wah bagus");
$newidPel = $row['idInputPelayanan'];
$newRating = rand(1,5);

$result = mysqli_query($conn, "INSERT INTO komentar (idInputPelayanan, komentar, rating, tanggal)
  VALUES ('$newidPel', '$komenArray[$newRating]', '$newRating', '$tanggal');");

mysqli_close($conn);

header('Location: data.php');
quit();