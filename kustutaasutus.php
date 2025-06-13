<?php
include ("config.php");
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

session_start();
include ("config.php");

if(isset($_GET['koht'])) {
    $valitudKohtId = $_GET['koht'];
    $sqlValitud_koht = "SELECT nimi FROM kohad WHERE id = '$valitudKohtId'";
    $valitud_koht = $uhendus->query($sqlValitud_koht);
    $row = mysqli_fetch_assoc($valitud_koht);

    $sqlKustutaAsutus = "DELETE FROM kohad WHERE id = '$valitudKohtId'";
    if ($uhendus->query($sqlKustutaAsutus) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Viga hinnangu kustutamisel: " . $uhendus->error;
    }
} else {
    header("Location: index.php");
}

$uhendus->close();
?>