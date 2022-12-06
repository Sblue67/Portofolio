<?php
    session_start();
    include_once "../scripts/login.php";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
            include_once "../include/css.php";
            include_once "../include/head.php";
        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <?php include "../include/header_pages.php" ?>
        <main class="text-center">
            <form class="form-signin" method="POST" style="margin-right: 40% !important; margin-left: 40% !important; padding: 2.5rem;">
                <h1 class="h3 mb-3 font-weight-normal" style="color: white !important">Please log in</h1>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            </form>
        </main>
        <?php include "../include/footer.php"; ?>
    </body>
</html>