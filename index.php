<?php
require "header.php";
require "server/connection.php";
?>

<!--Sākum lapa-->
<div class="pt-2 d-flex justify-content-center">
    <h1 class="display-4 pt-5 lh-base text-center fw-bold" style="width: 50rem;">
        Apskati un ceļo visu Latviju, ērti un viegli
    </h1>
</div>
<div class="d-flex justify-content-center">
    <p class="lh-base fs-4" style="width: 30rem; text-align: justify;">
        Ir ļoti svarīgi, lai klients būtu veiksmīgs. Tomēr mazākās sāpes radīs atgrūšanas sāpes.</p>
</div>
<div class="d-flex justify-content-center">
    <button type="button" class="fw-bold btn btn-lg"
        style="background-color: #F96C03; color:white; height:5rem;">Apskatīt
        ceļojumus ></button>
</div>

<!-- Iziet ara no diva conteinera uz bridi lai bilde butu pilna platuma-->
</div>
<img class="img-fluid" src="assets/images/buss.png" style="padding-bottom: 5rem;">
<div class="container">

    <!--Jaunumi-->
    <div class="d-flex justify-content-center pb-2">
        <span class="fs-5" style="color:#F96C03 ">Jaunumi</span>
    </div>
    <!--Jaunumu kārtis-->
    <card class="card m-3" id="card" style="width: 35rem; height: 17.5rem;"
        onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">
        <form action="" method="POST">
            <img src="" class="card-img-top">
            <h5>
                <type></type>
            </h5>
            <button type="submit" class="stretched-link"
                style="background: transparent; border: none !important;"></button>
        </form>
    </card>

    <!--Ceļojumu-->

    <div class="d-flex justify-content-center pb-2">
        <span class="fs-5" style="color:#F96C03 ">Ceļojumi</span>
    </div>
    <div class="d-flex justify-content-center">
        <h1 class="display-4 lh-base text-center fw-bold" style="width: 50rem;">
            Ceļojumi kuri šobrīd ir pieejami
        </h1>
    </div>

    <!--Ceļojumu kārtis ar skrulīti-->
    <div id="scrollbar">
        <div class="overflow-auto p-3 rounded" id="cardContainer" style="width: 700px;
            height: 650px;">
            <div class="row">
                <?php
                $vacations = mysqli_query($connection, "SELECT * FROM pakalpojumi_latvija");
                foreach ($vacations as $vacation):
                    ?>
                    <div class="card" style="width: 35rem; height: 17.5rem;"
                        onmouseover="this.style.transform='scale(1.03)';" onmouseout="this.style.transform='scale(1)';">
                        <form action="" method="POST">
                            <img src="<?php echo $vacation["Attels"] ?>" class="card-img-top" />
                            <h1 class="card-title">
                                <?php echo $vacation["Nosaukums"] ?>
                            </h1>
                            <button type="submit" class="stretched-link"
                                style="background: transparent; border: none !important;"></button>
                        </form>
                    </div>
                    <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>

    <!--Par mums-->
    <div class="d-flex justify-content-center pb-2">
        <span class="fs-5" style="color:#F96C03 ">Par mums</span>
    </div>
    <div class="d-flex justify-content-center">
        <h1 class="display-4 text-center lh-base fw-bold" style="width: 50rem;">
            Esam motivēti, iepazīstināt jūs ar Latvijas brīnumiem</h1>
    </div>
    <div class="d-flex justify-content-center">
        <p class="lh-base fs-4" style="width: 30rem; text-align: justify;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem minima dolore eveniet facere
            consectetur, repudiandae dolorem.</p>
    </div>
</div>
<?php
require "footer.php";
?>