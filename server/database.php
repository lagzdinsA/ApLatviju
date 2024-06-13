<?php
require 'connection.php';
if (isset($_POST["autorizacija"])) {
    session_start();
    $username = mysqli_real_escape_string($connection, $_POST["lietotajvards"]);
    $password = mysqli_real_escape_string($connection, $_POST["parole"]);
    $sql_teikums = "SELECT * FROM aplatviju_admini WHERE Lietotajvards='$username'";
    $result = mysqli_query($connection, $sql_teikums);
    if (mysqli_num_rows($result) == 1) {
        while ($user = mysqli_fetch_array($result)) {
            if (password_verify($password, $user['Parole'])) {
                $_SESSION["lietotajvards_PORR"] = $user["Lietotajvards"];
                header("location: admin/index.php");
                exit();
            } else {
                echo "Nepareizs lietotajs vai parole!";
            }
        }
    } else {
        echo "Nepareizs lietotajvards vai parole!";
    }
}

if (isset($_POST["pieteikties"])) {
    $vards = $_POST['vards'];
    $uzvards = $_POST['uzvards'];
    $telefons = $_POST['telefons'];
    $epasts = $_POST['epasts'];
    $celojums = $_POST["pieteikties"];
    $query = "INSERT INTO aplatviju_pieteikumi (Vards, Uzvards, Epasts, Telefons, Celojuma_ID) VALUES (?,?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$vards, $uzvards, $epasts, $telefons, $celojums]);
    $pdo = null;
    $stmt = null;
    echo '
    <script>
    $(document).ready(function(){
        $("#myModal").modal(\'show\');
    });
    </script>
    <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Paldies!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Veiksmīgi tikāt pieteikts pie ceļojuma.
        </div>
        <div class="modal-footer">
          <a href="index.php" type="button" class="btn btn-primary" style="background-color: #F96C03; color:white;">Atgriezties</a>
        </div>
      </div>
    </div>
  </div>
  ';
    $vacations = mysqli_query($connection, "SELECT * FROM aplatviju_celojumi");
    $popularID1 = 0;
    $popularCount1 = 0;
    $popularID2 = 0;
    $popularCount2 = 0;
    $popularID3 = 0;
    $popularCount3 = 0;
    foreach ($vacations as $vacation) :

        if ($vacation["Izdzests"] == 1) {
        } else {

            $ID = $vacation["ID"];
            $count = 0;
            $persons = mysqli_query($connection, "SELECT * FROM aplatviju_pieteikumi WHERE Celojuma_ID = '$ID'");
            mysqli_query($connection, "SELECT * FROM aplatviju_pieteikumi WHERE Celojuma_ID = '$ID'");

            foreach ($persons as $person) :
                $count++;
            endforeach;

            if ($count > $popularCount1) {
                $popularID1 = $ID;
                $popularCount1 = $count;
            } else {
                if ($count > $popularCount2) {
                    $popularID2 = $ID;
                    $popularCount2 = $count;
                } else {
                    if ($count > $popularCount3) {
                        $popularID3 = $ID;
                        $popularCount3 = $count;
                    }
                }
            }
        }
    endforeach;

    $sql = "UPDATE aplatviju_celojumi SET Populars=0";
    mysqli_query($connection, $sql);
    echo ("<script>console.log('PHP: asdasdas');</script>");
    if ($popularID1 != 0) {
        echo ("<script>console.log('PHP: asd');</script>");
        $sql1 = "UPDATE aplatviju_celojumi SET Populars=1 WHERE ID='$popularID1'";
        mysqli_query($connection, $sql1);
    }
    if ($popularID2 != 0) {
        $sql2 = "UPDATE aplatviju_celojumi SET Populars=1 WHERE ID='$popularID2'";
        mysqli_query($connection, $sql2);
    }
    if ($popularID3 != 0) {
        $sql3 = "UPDATE aplatviju_celojumi SET Populars=1 WHERE ID='$popularID3'";
        mysqli_query($connection, $sql3);
    }
}



function alert($type, $message)
{
    echo "<div class=\"alert alert-$type alert-dismissible\" role=\"alert\"> <div>$message</div>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>";
}

// Pakalpojumi

if (isset($_POST["dzest_pak"])) {
    $ID = $_POST["dzest_pak"];
    $sql_teikums = "UPDATE aplatviju_celojumi SET Izdzests = 1 WHERE ID = " . $ID;
    mysqli_query($connection, $sql_teikums);
}

if (isset($_POST["rediget_pak"])) {
    $ID = $_POST["rediget_pak"];
    $Nosaukums = $_POST["Nosaukums"];
    $mApraksts = $_POST["MazsApraksts"];
    $Apraksts = $_POST["Apraksts"];
    $Attels = $_POST["Attels"];
    $nDatums = $_POST["NoDatums"];
    $lDatums = $_POST["LidzDatums"];

    $sql_teikums = "UPDATE aplatviju_celojumi SET Nosaukums = '$Nosaukums', MazsApraksts='$mApraksts', Apraksts='$Apraksts', Attels='$Attels', NoDatums='$nDatums', LidzDatums='$lDatums' WHERE ID = " . $ID;
    mysqli_query($connection, $sql_teikums);
    header("location: pak.php");
}


// jaunumi

if (isset($_POST["dzest_j"])) {
    $ID = $_POST["dzest_j"];
    $sql_teikums = "UPDATE aplatviju_jaunumi SET Izdzests = 1 WHERE ID = " . $ID;
    mysqli_query($connection, $sql_teikums);
}

if (isset($_POST["rediget_j"])) {
    $ID = $_POST["rediget_j"];
    $Nosaukums = $_POST["Nosaukums"];
    $Attels = $_POST["Attels"];
    $Apraksts = $_POST["Apraksts"];

    $sql_teikums = "UPDATE aplatviju_jaunumi SET Nosaukums = '$Nosaukums',  Attels='$Attels', Apraksts='$Apraksts' WHERE ID = " . $ID;
    mysqli_query($connection, $sql_teikums);
    header("location: jaunumi.php");
}
