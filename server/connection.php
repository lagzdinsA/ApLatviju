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

$dsn = "mysql:host=localhost;dbname=grobina1_lagzdins";
$user = "grobina1_lagzdins";
$pwd = "cvvRAO4K!";

// Create connection
try {
    $pdo = new PDO($dsn, $user, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}