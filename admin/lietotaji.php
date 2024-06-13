<?php
require "header.php";
require '../server/database.php';
require '../server/connection.php';
?>

<section class="admin">
    <div class="row">
        <div class="info1 defaultBorders">
            <div class="head-info">Visi lietotāji</div>
            <table>
                <tr>
                    <th>Vārds</th>
                    <th>Parole</th>
                    <th>E-pasts</th>
                    <th>Statuss</th>
                </tr>

                <?php

                $visi_lietotaji = "SELECT * FROM aplatviju_admini";
                $atlasa_visus_liet = mysqli_query($connection, $visi_lietotaji);

                while ($liet = mysqli_fetch_array($atlasa_visus_liet)) {
                    if ($liet['Statuss'] == 1) {
                        $statuss = 'Moderators';
                    }
                    if ($liet['Statuss'] == 2) {
                        $statuss = 'Admins';
                    }
                    if ($liet['Statuss'] == 3) {
                        $statyss = 'Primarais admins';
                    }
                    echo "
                    <tr>
                        <td>{$liet['Lietotajvards']}</td>
                        <td>{$liet['Parole_Nesifreta']}</td>
                        <td>{$liet['Epasts']}</td>
                        <td>$statuss</td>
                    <tr>
                    ";
                }
                ?>

            </table>
        </div>
    </div>
</section>