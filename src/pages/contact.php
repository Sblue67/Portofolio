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
            <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
            <p class="text-center w-responsive mx-auto mb-5">
                Avez vous la moindre questions ? N'hésitez pas à me contacter directement !
            </p>
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5 text-center">
                    <form id="contact-form" name="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Votre nom</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Votre email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Sujet</label>
                                    <input type="text" id="subject" name="subject" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message">Message</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php include_once "send_message.php"; ?>
                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                    </div>
                    <div class="status"></div>
                </div>
            </div>
            </section>
        </main>
        <?php include "../include/footer_pages.php"; ?>
    </body>
</html>