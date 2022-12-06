<?php
    session_start();

    function my_connect_to_bdd()
    {
        $DB_host = "mariadb";
        $DB_user = "arthurcaillol";
        $DB_pass = "vKpw3TCnACWc8UBi";
        $DB_name = "arthur";

        try {
            $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
            $conn->exec("set names utf8mb4");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return ($conn);
    }

?>