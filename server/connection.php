<?php
$serveris = "localhost";
$lietotajvards = "grobina1_lagzdins";
$parole = "cvvRAO4K!";
$db_nosaukums = "grobina1_lagzdins";

$connection = mysqli_connect($serveris, $lietotajvards, $parole, $db_nosaukums);

if (!$connection) {
    #die("Pieslēgties DB neizdevās: ".mysqli_connect_error());
} else {
    #echo "Savienojums veiksmīgi izveidots!";
}