<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autroizācija</title>
    <script src="server/script.js"></script>
    <link rel="stylesheet" href="./admin/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg">
    <div class="l_con">
        <div class="cont1">
            <div>
                <a class="aLv" href="./index.php">ApLatviju</a>
                <p>Autorizēties sistēmā</p>
                <?php
                require "server/database.php";
                ?>
                <form method="POST">
                    <div>
                        <input type="text" name="lietotajvards" placeholder="Lietotajvārds">
                    </div>
                    <div>
                        <input type="password" name="parole" placeholder="Parole">
                    </div>
                    <div>
                        <button name="autorizacija" style="cursor: pointer;"><b>Autorizēties</b></button>
                    </div>

                    <p class="war">Šī sadaļa ir domāta TIKAI autorizētiem lietotājiem!</p>

                    <script>
                        if (window.history.replaceState) {
                            window.history.replaceState(null, null, window.location.href);
                        }
                    </script>

                </form>
            </div>
        </div>
        </divl_con>
</body>

</html>