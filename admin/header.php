<?php
session_start();
if (!isset($_SESSION["lietotajvards_PORR"])) {
    header("location:../login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apskatīt Latviju</title>
    <link rel="stylesheet" href="zadmin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="../server/script.js"></script>

</head>

<body>
    <header>
        <a class="apl" href="../index.php" class="logo h1">ApLatviju</a>
        <nav>
            <a href="index.php"><i class="fa-solid fa-home"></i> Sākumlapa</a>
            <a href="piet.php"><i class="fa-solid fa-users"></i> Pieteikumi</a>
            <a href="pak.php"><i class="fa-solid fa-handshake"></i> Pakalpojumi</a>
            <a href="jaunumi.php"><i class="fa-solid fa-question"></i> Jaunumi</a>
            <a href="lietotaji.php"><i class="fa-solid fa-user"></i></i> Lietoāji</a>


        </nav>

        <nav>
            <a href="logout.php"><b><?php echo $_SESSION["lietotajvards_PORR"]; ?>
                </b><i class="fas fa-power-off"></i></a>
        </nav>

    </header>