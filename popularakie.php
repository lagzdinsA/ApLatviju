<?php
require "assets/header.php";
require "server/connection.php";
require "server/database.php";
?>

<!--Sākum lapa-->
<div class="pt-2 d-flex justify-content-center">
    <h1 class="display-4 lh-base text-center fw-bold" style="width: 50rem;">
        Populārākie ceļojumi
    </h1>
</div>
<div class="d-flex justify-content-center">
    <p class="lh-base fs-4 text-center" style="width: 35rem;">
        Mūsu populārākie ceļojumi. Nepalaidiet garām!</p>
</div>
<div class="d-flex justify-content-center row">
    <?php
    $vacations = mysqli_query($connection, "SELECT * FROM aplatviju_celojumi");
    foreach ($vacations as $vacation) :
        if ($vacation["Populars"] == 0) {
        } else {


    ?>
            <div class="card m-2 p-3" style="width: 25rem; height: 27rem;" onmouseover="this.style.transform='scale(1.03)';" onmouseout="this.style.transform='scale(1)';">
                <form action="pakalpojums_atseviski.php?ID=<?php echo $vacation["ID"] ?>" method="POST">
                    <img src="<?php echo $vacation["Attels"] ?>" class="card-img-top" style="height: 15rem; width: 100%;" />
                    <div class="card-body">
                        <h2 class="card-title fw-bold">
                            <?php echo $vacation["Nosaukums"];
                            echo " <i style=\"color: #F96C03;\"class=\"fa-solid fa-fire\"></i>"; ?>
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
                    <button type="submit" class="stretched-link" style="background: transparent; border: none !important;"></button>
                </form>
            </div>
    <?php
        }
    endforeach;
    ?>
</div>
</div>

<?php
require "assets/footer.php";
?>