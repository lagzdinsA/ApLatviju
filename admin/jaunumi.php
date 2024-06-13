<?php
require "header.php";
?>

<section class="admin5">
    <div class="kopsavilkums5">
        <?php
        require '../server/database.php';
        require 'kopa.php';
        ?>

        <div class="row5">
            <div class="info15 defaultBorders">
                <div class="head-info5">

                <h3 style="padding-left:51.2rem;" class="fs-1 pt-5">Jaunumi</h3>
                <a class="btn btn-primary fs-2" href="pievienot_j.php">Pievienot jaunumu <i
                        class="fa-solid fa-circle-plus ps-2"></i></a>
                
                </div>
                <table class="main-table5">
                    <tr>
                        <th class="table-header5">Nosaukums</th>
                        <th class="table-header5">Attēls</th>
                        <th class="table-header5">Apraksts</th>
                        <th class="table-header5">Rediģēt informāciju</th>
                        <th class="table-header5">Dzēst</th>
                    </tr>

                    <?php
                    $visi_jaunumi = "SELECT * FROM aplatviju_jaunumi";
                    $atlasa_jaun = mysqli_query($connection, $visi_jaunumi);

                    while ($jaun = mysqli_fetch_array($atlasa_jaun)) {
                        if ($jaun["Izdzests"] == 1) {

                        }else{
                        echo "
                        <tr class='table-row5'>
                            <td class='table-cell5'>{$jaun['Nosaukums']}</td>
                          

                            <td class='table-cell5'> <img src=\"{$jaun['Attels']}\" style=\"height: 10rem; width: 15rem;\" /></td>

                            <td class='table-cell5'>{$jaun['Apraksts']}</td>
                            
                            <td style='padding: 10px;'><form method='post' action='rediget_j.php'>
                                        <button type='submit' name='jaunumaID' class='btn3' value='{$jaun['ID']}'><i class='fas fa-edit'></i></button>
                                    </form> </td>

                                    <td style='padding: 10px;'><form method='post' action=''>
                                    <button type='submit' name='dzest_j' class='btn3' value='{$jaun['ID']}'><i class='fa-solid fa-trash-can'></i></button>
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