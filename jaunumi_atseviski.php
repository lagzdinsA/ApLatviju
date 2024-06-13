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
    $news = mysqli_query($connection, "SELECT * FROM aplatviju_jaunumi WHERE ID = $ID");
    foreach ($news as $new) :
    ?>
        <div class="bg-white p-3 mb-3 rounded" style="border-color:#F96C03; border-style: solid; height: 80%;">
            <div>
                <!--Attēls-->
                <img src="<?php echo $new["Attels"] ?>" class="mb-2" style="width: 100%; height: 50%;" />
                <!--Nosaukums-->
                <div>
                    <h1 class="fs-2 text-dark ">
                        <?php echo $new["Nosaukums"]; ?></i>
                    </h1>
                </div>

                <div>
                    <!--Apraksts-->
                    <div class="fs-5">
                        <?php echo $new["Apraksts"]; ?>
                    </div>
                </div>
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