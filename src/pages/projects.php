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
        <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <script>
                        <?php
                            if ($_SESSION('name') == "root")
                                echo "<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>";
                        ?>
                      </script>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </main>
        <?php include "../include/footer_pages.php"; ?>
    </body>
</html>