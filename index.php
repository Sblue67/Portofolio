<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Portofolio Arthur CAILLOL</title>
        <link rel="stylesheet" href="src/style/main_style.css">
        <link rel="stylesheet" href="src/style/media_querry.css">
        <link rel="stylesheet" href="src/style/burger.css">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="shortcut icon" href="src/image/" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <?php include "./src/include/header_index.php";?>
        <main>
        <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading" style="color: white !important">Portofolio Arthur Caillol</h1>
          <p class="lead text-muted">Software Developper</p>
        </div>
      </section>
        </main>
        <?php include "./src/include/footer.php"; ?>
    </body>
</html>