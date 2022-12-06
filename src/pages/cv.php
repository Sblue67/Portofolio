<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
            include_once "../include/css.php";
            include_once "../include/head.php";
        ?>
    </head>
    <body>
        <?php include "../include/header_pages.php" ?>
        <main>
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 font-weight-normal" style="color: white !important">Curriculum vitæ</h1>
                    <p class="lead font-weight-normal" style="color: white !important">Voici mon Curriculum vitæ en version PDF.</p>
                    <a href="./src/pdf/CV.pdf" download="CAILLOL_Arthur_CV.pdf" class="btn btn-primary my">Telecharger CV</a>
                </div>
                <div class="product-device box-shadow d-none d-md-block"></div>
                <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
            </div>
        </main>
        <?php include "../include/footer_pages.php"; ?>
    </body>
</html>