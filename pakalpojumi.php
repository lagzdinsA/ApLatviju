<?php
require "assets/header.php";
require "server/connection.php";
require "server/database.php";
?>

<!--Sākum lapa-->
<div class="pt-2 d-flex justify-content-center">
    <h1 class="display-4 lh-base text-center fw-bold" style="width: 50rem;">
        Ceļojumi
    </h1>
</div>
<div class="d-flex justify-content-center">
    <p class="lh-base fs-4 text-center" style="width: 35rem;">
        Ceļojumi, kas Jums parādīs Latvijas skaistumu.</p>
</div>

<!--Filtrs-->
<div class="p1 input-group input-group-lg ps-4 pe-4">
    <span class="input-group-text" id="basic-addon2">Meklēt</span>
    <input type="text" class="form-control" id="name" oninput="filterVacations()" aria-describedby="basic-addon1">
</div>

<!--Celojumu kartis-->
<div class="d-flex justify-content-center row" id="cardContainer">

    <?php
    $vacations = mysqli_query($connection, "SELECT * FROM aplatviju_celojumi");
    foreach ($vacations as $vacation):
        if ($vacation["Izdzests"] == 1) {

        } else {
            ?>
            <card class="card m-2 p-3" id="card" style="width: 25rem; height: 27rem;"
                onmouseover="this.style.transform='scale(1.03)';" onmouseout="this.style.transform='scale(1)';">
                <form action="pakalpojums_atseviski.php?ID=<?php echo $vacation["ID"] ?>" method="POST">
                    <img src="<?php echo $vacation["Attels"] ?>" class="card-img-top" style="height: 15rem; width: 100%;" />
                    <div class="card-body">
                        <h2 class="card-title fw-bold">
                            <vacationName>
                                <?php echo $vacation["Nosaukums"]; ?>
                            </vacationName>

                            <?php
                            if ($vacation["Populars"] == 1) {
                                echo " <i style=\"color: #F96C03;\"class=\"fa-solid fa-fire\"></i>";
                            } ?>
                        </h2>
                        <p class="card-text fs-5">
                            <?php echo $vacation["MazsApraksts"] ?>
                        </p>
                        <p class="card">
                            No
                            <?php echo $vacation["NoDatums"] ?> lidz
                            <?php echo $vacation["LidzDatums"] ?>
                        </p>
                    </div>
                    <button type="submit" class="stretched-link"
                        style="background: transparent; border: none !important;"></button>
                </form>
            </card>
            <?php
        }
    endforeach;
    ?>
</div>
<div class="d-flex justify-content-center">
</div>
</div>

<?php
require "assets/footer.php";
?>