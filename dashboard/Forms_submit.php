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



header('Location: index.php');
quit();