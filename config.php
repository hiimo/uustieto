<?php
$db_server = 'localhost';
$db_andmebaas = 'hnarep';
$db_kasutaja = 'hnarep';
$db_salasona = 'o4zeZ37Q7QYxyBW2';

$uhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if (!$uhendus) {
    die('Ei saa ühendust andmebaasiga: ' . mysqli_connect_error());
}
