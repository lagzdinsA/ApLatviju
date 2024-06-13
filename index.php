<?php
require "assets/header.php";
require "server/connection.php";
require "server/database.php";
?>

<!--Sākum lapa-->
<div class="pt-2 d-flex justify-content-center">
    <h1 class="display-4 lh-base text-center fw-bold" style="width: 50rem;">
        Apskati un apceļo visu Latviju ērti un viegli
    </h1>
</div>
<div class="d-flex justify-content-center">
    <p class="lh-base fs-4 text-center" style="width: 30rem;">
        Esam Latvijas lielākā ceļojumu un tūrisma pakalpojumu sniedzēju kompānija. Esam gudrākie Latvijas tirgū.</p>
</div>
<div class="d-flex justify-content-center">
    <a href="pakalpojumi.php" type="button" class="align-middle fw-bold btn btn-lg pt-4"
        style="background-color: #F96C03; color:white; height:5rem;">Apskatīt
        ceļojumus ></a>
</div>

<!--Iziet no container lai bilde butu pa pilnu lapu-->
</div>
<img class="img-fluid" src="assets/images/buss.png" style="z-index: -1;">
<div class="container">

    <!--Par mums-->
    <div class="d-flex justify-content-center pt-5 pb-3">
        <span class="fs-4" style="color:#F96C03 ">Mūsu kvalitātes</span>
    </div>
    <div class="d-flex justify-content-center">
        <h1 class="display-4 text-center lh-base fw-bold" style="width: 50rem;">
            Esam gatavi Jums piedāvāt Latvijas burvīgākos ceļojumus!</h1>
    </div>
    <div class="d-flex justify-content-center pb-5">
        <p class="lh-base fs-4 text-center" style="width: 30rem;">
            Gribam parādīt Jums, cik Latvija ir burvīga un vienreizējoša valsts. Jūsu pieredze un labsajūta mums ir
            svarīgākā.</p>
    </div>
    <!--Kārtis ar bildēm-->
    <div class="container row d-flex justify-content-around pb-5">
        <div class="card border-0 p-2 col-md" style="width: 20rem; height: 22rem; background-color: #FFFBEE;">
            <img src="assets/images/fast.png" class="card-img-top pt-4" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title fs-3">Viegli un ātri</h5>
                <p class="card-text fs-5">Viegli un ātri piesakieties kādam no mūsu piedāvātajiem ceļojumiem!</p>
            </div>
        </div>
        <div class="card border-0 p-2 col-md" style="width: 20rem; height: 20rem; background-color: #FFFBEE;">
            <img src="assets/images/money.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title fs-3">Lēti</h5>
                <p class="card-text fs-5">Lētākas cenas Latvijas tirgū. Izbaudi ceļojumu bez finansiālām problēmām!</p>
            </div>
        </div>
        <div class="card border-0 p-2 col-md" style="width: 20rem; height: 20rem; background-color: #FFFBEE;">
            <img src="assets/images/friendly.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title fs-3">Draudzīgi</h5>
                <p class="card-text fs-5">Draudzīgi darbinieki un gidi nodrošinās labu pieredzi visai ģimenei!</p>
            </div>
        </div>
    </div>
</div>
<?php
require "assets/footer.php";
?>