<?php
require "header.php";
require "../server/connection.php";
require "../server/database.php";
?>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        color: #333;
    }

    section {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 20px;
    }

    form {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 140%;
    }

    form div {
        margin-bottom: 15px;
    }

    h3 {
        margin-bottom: 20px;
        font-size: 24px;
        text-align: center;
        color: #F96C03;
    }

    span {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #555;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #F96C03;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
    }
</style>

<section>
    <div>
        <form method="POST">
            <div>
                <h3>Pievienot jaunu jaunumu</h3>
            </div>
            <div>
                <span>Jaunuma nosaukums</span>
                <input type="text" name="Jnosaukums" class="form-control" aria-label="Sizing example input" placeholder="Ievadi jaunuma nosaukumu*" required>
            </div>
            <div>
                <span>Attēla saite</span>
                <input type="text" name="Jattels" class="form-control" placeholder="Ievadi jaunuma attēla saiti*" required>
            </div>
            <div>
                <span>Apraksts</span>
                <input type="text" name="Japraksts" class="form-control" placeholder="Ievadi jaunuma aprakstu*" required>
            </div>
            <div>
                <form action="" method="post">
                    <button type="submit" name="pievienot_jaun">Pievienot</button>
                </form>

            </div>
        </form>
    </div>
</section>




<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['pievienot_jaun'])) {
        $j_nos_ievade = mysqli_real_escape_string($connection, $_POST['Jnosaukums']);
        $j_att_ievade = mysqli_real_escape_string($connection, $_POST['Jattels']);
        $j_apr_ievade = mysqli_real_escape_string($connection, $_POST['Japraksts']);

        $jau_SQL = "INSERT INTO aplatviju_jaunumi (Nosaukums, Attels, Apraksts) VALUES ('$j_nos_ievade', '$j_att_ievade', '$j_apr_ievade')";

        if (mysqli_query($connection, $jau_SQL)) {
            echo "<div class='success-message'>Jauns jaunums veiksmīgi pievienots.</div>";
            echo "<script>
                    setTimeout(function(){
                        window.location.href = 'jaunumi.php';
                    }, 500); // 2 seconds delay
                  </script>";
        } else {
            echo "<div class='error-message'>Kļūda: " . mysqli_error($connection) . "</div>";
        }
    }
}
?>



<?php
require "footer.php";
?>