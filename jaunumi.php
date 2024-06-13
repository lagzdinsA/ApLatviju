<?php
require "assets/header.php";
require "server/connection.php";
require "server/database.php";
?>

<!--Sākum lapa-->
<div class="pt-2 d-flex justify-content-center">
    <h1 class="display-4 lh-base text-center fw-bold" style="width: 50rem;">
        Jaunumi
    </h1>
</div>
<div class="d-flex justify-content-center">
    <p class="lh-base fs-4 text-center" style="width: 35rem;">
        Uzziniet mūsu jaunākos piedāvājumus un izmaiņas!</p>
</div>

<div class="d-flex justify-content-center row">
    <?php
    $news = mysqli_query($connection, "SELECT * FROM aplatviju_jaunumi");
    foreach ($news as $new):
        if ($new["Izdzests"]==1) {
         }else{
        ?>
        <div class="card m-2 p-3" style="width: 35em; height: 20rem;" onmouseover="this.style.transform='scale(1.03)';"
            onmouseout="this.style.transform='scale(1)';">
            <form action="jaunumi_atseviski.php?ID=<?php echo $new["ID"] ?>" method="POST">
                <img src="<?php echo $new["Attels"] ?>" class="card-img-top" style="height: 15rem; width: 100%;" />
                <div class="card-body">
                    <h2 class="card-title fw-bold">
                        <?php echo $new["Nosaukums"]; ?>
                    </h2>
                    <p class="card-text fs-5">
                        <?php echo $new["MazsApraksts"] ?>
                    </p>
                    <button type="submit" class="stretched-link"
                        style="background: transparent; border: none !important;"></button>
                </div>
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