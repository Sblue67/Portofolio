<?php
    session_start();

    function init_connexion($connexion)
    {
        $stmt = $connexion->prepare("SELECT `login`, `password` FROM `login`");
        $stmt->execute([':login' => $_SESSION["login"], ':password' => $_SESSION["password"]]);
        return ($stmt->fetch());
    }

    function check_login()
    {
        include "bdd.php";

        $id = init_connexion(my_connect_to_bdd());
        if ($id[0] == $id['login'] && $id[1] == $id['password']) {
            $_SESSION['login'] = 'root';
        } else
            header("location:../../index.php");
    }

    check_login();

?>