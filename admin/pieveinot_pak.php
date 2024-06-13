<?php
require "header.php";
?>

<section class="admin">
    <div class="row1">
        <div class="info1 defaultBorders">
            <div class="head-info head-color d-flex justify-content-between">
                <h3 class="fs-1 pt-5">Pievienot pakalpojumu</h3>
            </div>
            <form method="POST">
                <div class="input-group input-group-lg mt-5 mb-5" style="height: 5rem;">
                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 10rem;">Specialitate</span>
                    <input type="text" name="Nosaukums" class="form-control" aria-label="Sizing example input"
                        placeholder="Ievadi ceļojuma nosaukumu*" required>
                </div>
                <div class="input-group input-group-lg mt-5 mb-5" style="height: 30rem;">
                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 10rem;">Mazais apraksts</span>
                    <input type="text" name="Apraksts" class="form-control form-control col-md-offset-1"
                        aria-label="Sizing example input" placeholder="Ievadi ceļojuma mazo aprakstu*" required>
                </div>
                <div class="input-group input-group-lg mt-5" style="height: 5rem;">
                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 10rem;">Pilnais apraksts</span>
                    <input type="text" name="Attels" class="form-control"
                        placeholder="Ievadi ceļojuma pilno aprakstu*" style="width: 5rem;" required>
                </div>
                <div class="input-group input-group-lg mt-5" style="height: 5rem;">
                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 10rem;">Attēla saite</span>
                    <input type="text" name="Attels" class="form-control"
                        placeholder="Ievadi attēla saiti*" style="width: 5rem;" required>
                </div>
                <div class="input-group input-group-lg mt-5" style="height: 5rem;">
                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 10rem;">Datums no</span>
                    <input type="text" name="Attels" class="form-control"
                        placeholder="Ievadi datumu, no kura sāktos šis ceļojums*" style="width: 5rem;" required>
                </div>
                <div class="input-group input-group-lg mt-5" style="height: 5rem;">
                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 10rem;">Datums līdz</span>
                    <input type="text" name="Attels" class="form-control"
                        placeholder="Ievadi datumu, kurā šis ceļojums beigtos*" style="width: 5rem;" required>
                </div>
                <div class="input-group input-group-lg mt-5" style="height: 5rem;">
                    <span class="input-group-text" id="inputGroup-sizing-lg" style="width: 10rem;">Populārs</span>
                    <input type="text" name="Attels" class="form-control"
                        placeholder="Ievadi vai šis ir populārs ceļojums (Jā / Nē)*" style="width: 5rem;" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-lg btn-primary fs-1 m-3" type="submit"
                        name="pievienot_pak">Pievienot</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
require "footer.php";
?>