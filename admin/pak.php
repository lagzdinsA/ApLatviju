<?php
require "header.php";
?>

<section class="admin2">
    <div class="kopsavilkums2">
        <?php
        require '../server/database.php';
        require 'kopa.php';
        ?>

        <div class="row22">
            <div class="info12 defaultBorders2">
                <div class="head-info2">
                    <h3 style="padding-left:16rem;" class="fs-1 pt-5">Piedāvātie pakalpojumi</h3>
                    <a class="btn btn-primary fs-2" href="pievienot_pak.php">Pievienot pakalpojumu <i
                            class="fa-solid fa-circle-plus ps-2"></i></a>

                </div>
                <table style="width:100%" class="main-table2">
                    <tr>
                        <th style="width:8%" class="table-header2">Nosaukums</th>
                        <th style="width:15%" class="table-header2">Mazais apraksts</th>
                        <th style="width:18%" class="table-header2">Pilnais apraksts</th>
                        <th style="width:22%" class="table-header2">Attēls</th>
                        <th style="width:8%" class="table-header2">No kura sāksies</th>
                        <th style="width:8%" class="table-header2">Kurā beigsies</th>
                        <th style="width:5%" class="table-header2">Populārs</th>
                        <th style="width:8%" class="table-header2">Rediģēt informāciju</th>
                        <th style="width:8%" class="table-header2">Dzēst</th>
                    </tr>

                    <?php
                    $visi_piedavajumi = "SELECT * FROM aplatviju_celojumi";
                    $atlasa_visus_pied = mysqli_query($connection, $visi_piedavajumi);

                    while ($pied = mysqli_fetch_array($atlasa_visus_pied)) {
                        if ($pied["Izdzests"] == 1) {
                        } else {
                            echo "
                        <tr class='table-row2'>
                            <td class='table-cell2'>{$pied['Nosaukums']}</td>
                            <td class='table-cell2'>{$pied['MazsApraksts']}</td>
                            <td class='table-cell2'>{$pied['Apraksts']}</td>
                            

                            <td class='table-cell2'> <img src=\"{$pied['Attels']}\" style=\"height: 12rem; width: 20rem;\" /></td>

                            <td class='table-cell2'>{$pied['NoDatums']}</td>
                            <td class='table-cell2'>{$pied['LidzDatums']}</td>
                            <td class='table-cell2'>{$pied['Populars']}</td>
                            <td style='padding: 10px;'><form method='post' action='rediget_pak.php'>
                                        <button type='submit' name='celojumaID' class='btn3' value='{$pied['ID']}'><i class='fas fa-edit'></i></button>
                                    </form> </td>
                                    <td style='padding: 10px;'><form method='post' action=''>
                                    <button type='submit' name='dzest_pak' class='btn3' value='{$pied['ID']}'><i class='fa-solid fa-trash-can'></i></button>
                            </form> </td>
                        </tr>";
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>