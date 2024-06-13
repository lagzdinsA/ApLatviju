<?php
require "assets/header.php";
require "server/connection.php";
require "server/database.php";
$ID = $_GET["ID"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
} else {
    header("Location: pakalpojumi.php");
}
?>

<div class="d-flex justify-content-center row">
    <?php
    $vacations = mysqli_query($connection, "SELECT * FROM aplatviju_celojumi WHERE ID = $ID");
    foreach ($vacations as $vacation) :
    ?>
        <div class="bg-white p-3 mb-3 rounded" style="border-color:#F96C03; border-style: solid; height: 80%;">
            <div class="text-center">
                <!--Attēls-->
                <img src="<?php echo $vacation["Attels"] ?>" class="mb-2" style="width: 100%;" />
                <!--Nosaukums-->
                <div>
                    <h1 class="fs-1 text-dark ">
                        <vacationName><?php echo $vacation["Nosaukums"]; ?></vacationName>
                        <?php if ($vacation["Populars"] == 1) {
                            echo " <i style=\"color: #F96C03;\"class=\"fa-solid fa-fire\"></i>";
                        } ?>
                    </h1>
                </div>

                <div>
                    <!--Apraksts-->
                    <div class="fs-4" style="width: 60%; margin: auto;">
                        <?php echo $vacation["Apraksts"]; ?>
                    </div>
                    <div class="pt-1 fs-5 fw-bold">
                        No
                        <?php echo $vacation["NoDatums"] ?> lidz
                        <?php echo $vacation["LidzDatums"] ?>
                    </div>
                </div>
                <form method='POST' action='pakalpojums_pieteikties.php?ID=<?php echo $ID; ?>'>
                    <button type='submit' name='dzest_spec' class='btn btn-lg fs-4' style="color: black; border: 2px solid #F96C03;" value="<?php echo $ID; ?>">Pieteikties</button>
                </form>
            </div>

        </div>
    <?php
    endforeach;
    ?>
</div>
</div>
<?php
require "assets/footer.php";
?>