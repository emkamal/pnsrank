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



function getListKota($prov)
{
    $conn = connect();

    $sql = "SELECT idArea, namaArea FROM area WHERE tipeArea = 'Kota' AND parent = $prov";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

function getListPelayanan()
{
    $conn = connect();

    $sql = "SELECT idTypePelayanan, jenisPelayanan FROM tipePelayanan";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

function getFeedbackBasedOnIdPNS($idPNS)
{
    $conn = connect();

    $sql = "SELECT t3.name, t1.Tanggal, t1.komentar, t1.rating FROM komentar t1, inputPelayanan t2, PNS t3 WHERE t1.idInputPelayanan = t2.idInputPelayanan AND t2.idPNS = t3.idPNS AND t2.idPNS = $idPNS";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

function getAllPNS(){
	$conn = connect();

    $sql = "SELECT * FROM PNS";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

?>

