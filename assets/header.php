<!DOCTYPE html>
<html lang="lv">
<!--Linking scripts-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apskatit Latviju</title>
    <!--Bootstraps un jquery-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="assets/style.css">
</head>
<script src="server/script.js"></script>
<!--Header and container-->

<body class="d-flex flex-column min-vh-100" style="background-color: #FFFBEE; height: -300rem;">
    <header class="mb-5 sticky-top" style="background-color: #FFFBEE">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-1" style="color: #F96C03;" href="index.php">ApLatviju</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fs-4" aria-current="page" href="pakalpojumi.php">Pakalpojumi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="popularakie.php">Populārākie ceļojumi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="jaunumi.php">Jaunumi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="mums.php">Par mums</a>
                        </li>
                    </ul>
                    <a class="btn p-0 pt-1 link-underline link-underline-opacity-0 link-underline-opacity-0-hover rounded fs-5" href="login.php" style="color: black; border: 2px solid #F96C03; height: 2.5rem;width: 8rem; margin-right: 2rem;">Autorizēties</a>
                </div>
            </div>
        </nav>

    </header>
    <div class="container">
        <div class="mt-3 w-25 m-auto fixed-top" id="alertPlaceholder">

        </div>
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>