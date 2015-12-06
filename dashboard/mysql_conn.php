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

    $sql = "SELECT idArea, namaArea FROM area WHERE tipeArea = 'Kota' AND parent = (SELECT parent FROM area WHERE idArea = $prov)";
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

function get2highestFeedbackBasedOnIdPNS($idPNS)
{
    $conn = connect();

    $sql = "SELECT t3.name, t1.Tanggal, t1.komentar, t1.rating FROM komentar t1, inputPelayanan t2, PNS t3 WHERE t1.idInputPelayanan = t2.idInputPelayanan AND t2.idPNS = t3.idPNS AND t2.idPNS = $idPNS ORDER BY t1.rating DESC LIMIT 2";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

function getDataLayanan($idPNS)
{
	$conn = connect();

    $sql = "SELECT * FROM inputPelayanan WHERE idPNS = $idPNS ORDER BY idInputPelayanan DESC";
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

function getPNSData($idPNS)
{
    $conn = connect();

    $sql = "SELECT t1.idPNS as idPNS, t1.name as NamaPNS, t2.idKantor as idKantor, t2.nama as NamaKantor, t3.namaArea as NamaArea, t3.idArea as idArea from PNS t1, kantorPP t2, area t3 WHERE idPNS = $idPNS AND t1.idKantor = t2.idKantor AND t2.idArea = t3.idArea";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

function getInfoKomentarPNS($idPNS)
{
    $conn = connect();

    $sql = "SELECT COUNT( * ) AS jumlah, AVG( t1.rating ) AS avgrating
            FROM komentar t1, inputPelayanan t2
            WHERE t1.idInputPelayanan = t2.idInputPelayanan
            AND t2.idPNS = $idPNS";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

function getInfoKomentarKantor($idKantor)
{
    $conn = connect();

    $sql = "SELECT count(*) as jumlah, AVG(t1.rating) as avgrating
            FROM komentar t1, inputPelayanan t2, PNS t3
            WHERE t1.idInputPelayanan = t2.idInputPelayanan
            AND t2.idPNS = t3.idPNS AND t3.idKantor = $idKantor";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}

?>

