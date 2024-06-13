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
    foreach ($vacations as $vacation):
        ?>
        <div class="bg-white p-3 mb-3 rounded" style="border-color:#F96C03; border-style: solid; height: 80%; width:40rem;">
            <div class="d-flex justify-content-center">
                <h2 class>
                    <?php echo $vacation['Nosaukums']; ?>
                </h2>
            </div>
            <div class="pt-1 fs-5 fw-bold text-center">
                No
                <?php echo $vacation["NoDatums"] ?> lidz
                <?php echo $vacation["LidzDatums"] ?>
            </div>
            <form method="POST" style="width: 100%;">
                <div class="input-group mb-3 input-group-lg">
                    <input type="text" class="form-control" name="vards" placeholder="Vards*"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3 input-group-lg">
                    <input type="text" class="form-control" name="uzvards" placeholder="Uzvards*"
                        aria-describedby="basic-addon2" required>
                </div>
                <div class="input-group mb-3 input-group-lg">
                    <input type="text" class="form-control" name="telefons" placeholder="Tel. Numurs*"
                        aria-describedby="basic-addon2" required>
                </div>
                <div class="input-group mb-3 input-group-lg">
                    <input type="text" class="form-control" name="epasts" placeholder="E-pasts*"
                        aria-describedby="basic-addon2" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit"
                        class="btn link-underline link-underline-opacity-0 link-underline-opacity-0-hover rounded fs-4 btn-lg"
                        style="color: black; border: 2px solid #F96C03;" value="<?php echo $vacation["ID"] ?>"
                        name="pieteikties">Pieteikties</button>
                </div>
            </form>
        </div>

        <?php
    endforeach;
    ?>
</div>



<!--END-->
</div>


<?php
require "assets/footer.php";
?>