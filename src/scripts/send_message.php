<?php
    session_start();

    function check_data($connexion):bool
    {
        if (isset($_POST['name'])) {
            $message_len = strlen((string)$_POST['message']);
            if ($message_len > 5000) {
                echo "Message trop long";
                return (1);
            } else if ($message_len <= 5) {
                echo $message_len;
                echo "Un message doit être rentré";
            }
            $contact = init_connexion($connexion);
            if (empty($contact))
                $subject = $contact[3];
            if ($_POST['subject'] == $subject)
                echo "Sujet déjà exitant !";
            send_to_bdd($connexion);
        }
        return (0);
    }

    function send_to_bdd($connexion):bool
    {
        $sql = "INSERT INTO contact (`name`, `subject`, `email`, `message`) VALUES (?,?,?,?)";
        $exec = [$_POST['name'], $_POST['subject'], $_POST['email'], $_POST['message']];
        $connexion->prepare($sql)->execute($exec);
        return (0);
    }

    function init_connexion($connexion)
    {
        $stmt = $connexion->prepare("SELECT 'subject' FROM contact WHERE 'subject'=':subject'");
        $stmt->execute([':subject' => $_POST["subject"]]);
        return ($stmt->fetch());
    }

    function send_message()
    {
        include "bdd.php";

        check_data(my_connect_to_bdd());
    }

    send_message();

?>