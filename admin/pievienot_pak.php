<?php
require "header.php";
require "../server/connection.php";
require "../server/database.php";

?>

<style>
    /* Your existing CSS */
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
    input[type="text"], input[type="datetime-local"] {
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
    .success-message, .error-message {
        text-align: center;
        font-size: 18px;
        color: green;
        margin-bottom: 20px;
    }
    .error-message {
        color: red;
    }
</style>

<section>
    <div>
        <form method="POST">
            <div>
                <h3>Pievienot pakalpojumu</h3>
            </div>
            <div>
                <span>Pakalpojuma nosaukums</span>
                <input type="text" name="Nosaukums" placeholder="Ievadi ceļojuma nosaukumu*" required>
            </div>
            <div>
                <span>Mazais apraksts</span>
                <input type="text" name="mApraksts" placeholder="Ievadi ceļojuma mazo aprakstu*" required>
            </div>
            <div>
                <span>Pilnais apraksts</span>
                <input type="text" name="pApraksts" placeholder="Ievadi ceļojuma pilno aprakstu*" required>
            </div>
            <div>
                <span>Attēla saite</span>
                <input type="text" name="Attels" placeholder="Ievadi attēla saiti*" required>
            </div>
            <div>
                <span>Datums no</span>
                <input type="text" name="dN" class="form-control" placeholder="Ievadi datumu, no kura sāktos šis ceļojums*" required>
            </div>
            <div>
                <span>Datums līdz</span>
                <input type="text" name="dL" class="form-control" placeholder="Ievadi datumu, kurā šis ceļojums beigtos*" required>
            </div>
            <div>
                <button type="submit" name="pievienot_pak">Pievienot</button>
            </div>
        </form>
    </div>
</section>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pievienot_pak'])) {
    $nos_ievade = mysqli_real_escape_string($connection, $_POST['Nosaukums']);
    $m_apr_ievade = mysqli_real_escape_string($connection, $_POST['mApraksts']);
    $p_apr_ievade = mysqli_real_escape_string($connection, $_POST['pApraksts']);
    $att_ievade = mysqli_real_escape_string($connection, $_POST['Attels']);
    $dN_ievade = mysqli_real_escape_string($connection, $_POST['dN']);
    $dL_ievade = mysqli_real_escape_string($connection, $_POST['dL']);

    $pak_SQL = "INSERT INTO aplatviju_celojumi (Nosaukums, MazsApraksts, Apraksts, Attels, NoDatums, LidzDatums) 
                VALUES ('$nos_ievade', '$m_apr_ievade', '$p_apr_ievade', '$att_ievade', '$dN_ievade', '$dL_ievade')";

    if (mysqli_query($connection, $pak_SQL)) {
        echo "<div class='success-message'>Jauns pakalpojums veiksmīgi pievienots.</div>";
        echo "<script>
                setTimeout(function(){
                    window.location.href = 'pak.php';
                }, 500); // 2 seconds delay
              </script>";
    } else {
        echo "<div class='error-message'>Kļūda: " . mysqli_error($connection) . "</div>";
    }
}
?>

<?php
require "footer.php";
?>