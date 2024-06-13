<?php
require "header.php";
?>

<section class="admini">
    <div class="kopsavilkumsi">
        <?php
        require '../server/database.php';
        require 'kopa.php';
        ?>

        <div class="info-box">
            <span>
                <?php echo $jauniPieteikumi; ?>
            </span>
            <div>
                <h3>Jauni pieteikumi</h3>
                <p>pēdējo 24 stundu laikā</p>
            </div>
        </div>
        <div class="info-box">
            <span>
                <?php echo $parbauditiPieteikumi; ?>
            </span>
            <div>
                <h3>Parbaudīti ceļojumu pieteikumi</h3>
                <p>kopš sākuma</p>
            </div>
        </div>
        <div class="info-box">
            <span>
                <?php echo  $visiPakalpojumi; ?>
            </span>
            <div>
                <h3>Visi ceļojumi</h3>
                <p>pie kuriem var pieteikties</p>
            </div>
        </div>
    </div>
    </div>

    <!-- Hederi 3 sadalas japabida pa vidu ,Par mums sadala nav(jaieliek nummurs, adrese, epasts),zem virsrakstiem tas info jabut lai iziet vairak uz saniem,
jaunumu sadala kk vel jaieliek, un viss parejais par admin dalu. -->



</section>