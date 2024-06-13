<?php
$jauni_pieteikumi_SQL = "SELECT count(Klienta_ID) FROM aplatviju_pieteikumi WHERE Reg_Datums BETWEEN NOW() - INTERVAL 1 DAY AND NOW()";

$atlasa_jauni_pieteikumi = mysqli_query($connection, $jauni_pieteikumi_SQL);

while ($rezultats = mysqli_fetch_array($atlasa_jauni_pieteikumi)) {
    $jauniPieteikumi = "{$rezultats['count(Klienta_ID)']}";
}


$parbauditi_pieteikumi_SQL = "SELECT count(Klienta_ID) FROM celojumu_pieteikumi WHERE Apstiprinats = Jā";

$atlasa_parbauditi_pieteikumi = mysqli_query($connection, $parbauditi_pieteikumi_SQL);

$parbauditiPieteikumi = 0;
while ($rezultats = mysqli_fetch_array($atlasa_parbauditi_pieteikumi)) {
    $parbauditiPieteikumi = "{$rezultats['count(Klienta_ID)']}";
}


$visi_pakalpojumi_SQL = "SELECT * FROM aplatviju_celojumi WHERE Izdzests=0";

$celojumi = mysqli_query($connection, $visi_pakalpojumi_SQL);

$visiPakalpojumi = 0;
foreach ($celojumi as $celojums):
    $visiPakalpojumi++;
endforeach
?>