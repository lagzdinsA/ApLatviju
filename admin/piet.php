<?php
require "header.php";
?>

<section class="admin">
    <div class="kopsavilkums">
        <?php
        require '../server/database.php';
        require 'kopa.php';
        ?>


        <div class="row">
            <div class="info1 defaultBorders">
                <div class="head-info">Jaunākie pieteikumi</div>
                <table>
                    <tr>
                        <th>Vārds</th>
                        <th>Uzvārds</th>
                        <th>E-pasts</th>
                        <th>Telefons</th>
                        <th>Izvēlētais ceļojums</th>
                        <th>Apstiprināts</th>
                        <th>Apstiprināt</th>
                        <th></th>
                    </tr>

                    <?php

                    $visi_celojumu_pieteikumi = "SELECT * FROM aplatviju_pieteikumi";
                    $atlasa_visus_piet = mysqli_query($connection, $visi_celojumu_pieteikumi);

                    while ($piet = mysqli_fetch_array($atlasa_visus_piet)) {
                        $ID = $piet['Celojuma_ID'];
                        $query = "SELECT * FROM aplatviju_celojumi WHERE ID=$ID";
                        $vardi = mysqli_query($connection, $query);
                        foreach ($vardi as $vards):
                            echo "
                    <tr>
                        <td>{$piet['Vards']}</td>
                        <td>{$piet['Uzvards']}</td>
                        <td>{$piet['Epasts']}</td>
                        <td>{$piet['Telefons']}</td>
                        <td>{$vards['Nosaukums']}</td>
                        <td>{$piet['Apstiprinats']}</td>
                        <td style='padding: 10px;'><form method='post' action=''>
                                        <button type='submit' name='mainit' class='btn3' value='{$spec['Audzeknis_ID']}'><i class='fas fa-edit'></i></button>
                                    </form> </td>
                    <tr>
                    ";
                        endforeach;
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
</section>