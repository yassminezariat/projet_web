<?php
include_once '../back/Controller/ClientC.php';
include_once '../back/Model/Client.php';

    $error = "";

    $user = null;

    $ClientC = new clientC();
    if (
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) &&
        isset($_POST["login"]) &&
        isset($_POST["password"]) &&
        isset($_POST["password1"]) &&
        isset($_POST["adresse"]) &&
        isset($_POST["tel"])
    ) {
        if (
            !empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["login"]) &&
            !empty($_POST["password"]) &&
            !empty($_POST["adresse"]) &&
            !empty($_POST["tel"]) &&
            (($_POST["tel"]>=20000000) && ($_POST["tel"]<=99999999))&&
            ($_POST["password"]==$_POST["password1"])

        ) {
            $_CLIENT['e'] = $_POST["email"];
            $_CLIENT['l'] = $_POST["login"];
            $_CLIENT['t'] = $_POST["tel"];
            $Client = new client(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['email'],
                $_POST['login'],
                $_POST['password'],
                $_POST['adresse'],
                $_POST['tel']



            );

            $ClientC->ajouterclient($Client);
            header('Location:index.php');
        }

        else if (($_POST["password"]!=$_POST["password1"]) && (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999)))
            $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche / le mot de passe doit être le même dans la confirmation";

        else if (($_POST["tel"]<20000000) || ($_POST["tel"]>99999999))
            $error = "le numero doit être de 8 chiffres avec 2-9 comme premier chiffre à gauche";
        else if ($_POST["password"]!=$_POST["password1"])
            $error = "le mot de passe doit être le même dans la confirmation";

    }


?>
