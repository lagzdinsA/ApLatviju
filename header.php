<!DOCTYPE html>
<html lang="lv">
<!--Linking scripts-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apskatit Latviju</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<!--Header and container-->

<body class="d-flex flex-column min-vh-100 ">
    <header class="pt-3 mb-5 absolute-top" style="background-color: white;">
        <div class="container d-flex justify-content-between">
            <nav class="nav pt-2" style="font-size: 1.5rem;">
                <a class="nav-link link-dark" href="#">Jaunumi</a>
                <a class="nav-link link-dark" href="#">Ceļojumi</a>
                <a class="nav-link link-dark" href="#">Par Mums</a>
            </nav>
            <h1 class="display-7">
                <a class="fw-bold link-underline link-underline-opacity-0 link-underline-opacity-0-hover"
                    style="color: Orange;" href="index.php">Apskatīt Latviju
                    <i class="fa fa-solid-image-landscape"></i>
                </a>
            </h1>
        </div>
    </header>
    <div class="container">
        <div class="mt-3 w-25 m-auto fixed-top" id="alertPlaceholder"></div>

        <!--Makes it so a popup doesn't who everytime you refresh or close page with inputs-->
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>