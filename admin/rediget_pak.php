<?php
require "header.php";
require "../server/connection.php";
require "../server/database.php";


$ID = $_POST["celojumaID"];

$sql_teikums = "SELECT * FROM aplatviju_celojumi WHERE ID ='$ID'";
$atlasa_jaunu_cel = mysqli_query($connection, $sql_teikums);
$cel = mysqli_fetch_array($atlasa_jaunu_cel);

?>

<style>
    .admin0 {
        text-align: center;
        margin: 2rem auto;

    }

    .info1 {
        padding: 2rem;
        border-radius: 10px;
        width: calc(60%);
    }

    .head-info0 {
        background-color: #4CAF50;
        color: white;
        padding: 1rem;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .submission-table {
        width: 100%;
        margin-top: 2rem;
    }

    .submission-table td {
        padding: 0.5rem;
    }

    .submission-table span {
        display: block;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .submission-table input[type="text"] {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 1rem;
    }

    .submission-table button {
        background-color: #F96C03;
        color: white;
        padding: 0.5rem 2rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        width: 100%;
    }

    .defaultBorders {
        border: 1px solid #ccc;

    }

    .row1 {
        display: flex;
        justify-content: center;
        padding-bottom: 24rem;
    }

    .head-color {
        color: white;
    }

    h3 {
        color: #F96C03;
        text-align: center;
    }
</style>

<section class="admin">
    <div class="row1">
        <div class="info1 defaultBorders">
            <div class="head-info head-color" style="font-size: 1.8rem; margin-top: 5rem;">
                <h3>Rediģēt pakalpojumu</h3>
            </div>
            <form method="POST">
                <table class="submission-table">
                    <?php
                    $vacations = mysqli_query($connection, "SELECT * FROM aplatviju_celojumi WHERE ID = $ID");
                    foreach ($vacations as $vacation):
                        ?>
                        <tr>
                            <td><span>Nosaukums</span></td>
                            <td><input type="text" name="Nosaukums" placeholder="Ievadi jaunā ceļojuma nosaukumu*"
                                    value="<?php echo $vacation["Nosaukums"]; ?>" required></td>
                        </tr>
                        <tr>
                            <td><span>Mazais apraksts</span></td>
                            <td><input type="text" name="MazsApraksts" placeholder="Ievadi jaunu mazo aprakstu*"
                                    value="<?php echo $vacation['MazsApraksts']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td><span>Pilnais apraksts</span></td>
                            <td><input type="text" name="Apraksts" placeholder="Ievadi jaunu pilno aprakstu*"
                                    value="<?php echo $vacation['Apraksts']; ?>" required></td>
                        </tr>
                        <tr>
                            <td><span>Attēls</span></td>
                            <td><input type="text" name="Attels" placeholder="Ievadi jauno attēla saiti*"
                                    value="<?php echo $vacation['Attels']; ?>" required></td>
                        </tr>
                        <tr>
                            <td><span>Kad ceļojums sāksies</span></td>
                            <td><input type="date" name="NoDatums" placeholder="Ievadi kad sāksies ceļojums*"
                                    value="<?php echo $vacation['NoDatums']; ?>" required></td>
                        </tr>
                        <tr>
                            <td><span>Kad ceļojums beigsies</span></td>
                            <td><input type="date" name="LidzDatums" placeholder="Ievadi kad beigsies ceļojums*"
                                    value="<?php echo $vacation['LidzDatums']; ?>" required>
                            </td>
                        </tr>
                        <td colspan="2"><button class="btn" type="submit" value="<?php echo $ID ?>"
                                name="rediget_pak">Rediģēt</button></td>
                        <?php
                    endforeach;
                    ?>
                </table>
            </form>
        </div>
    </div>
</section>