<?php

include_once"eveC.php";

$error = "";
$success = 0;
// create user
//$evenemet=new evenement($_POST['id_eve'],$_POST['date_eve'],$_POST['type_eve']);    

$evenementc = new evenementC();


if (isset($_POST["id_eve"])&& isset($_POST["date_eve"]) && isset($_POST["type_eve"]))
    {//{if (empty($_POST["nom"])&& empty($_POST["prenom"]) && empty($_POST["dateNais"]) && empty($_POST["email"]) && empty($_POST["tel"]) && empty($_POST["adresse"]) && empty($_POST["login"]) && empty($_POST["pass"])) {

    $evenement= new evenement(
        $_POST['id_eve'],
        $newDate = date("Y-m-d", strtotime($_POST['date_eve'])),
        (string)$_POST['type_eve']

    );
    $liste=$evenementC->recuperereve($_GET['id_eve']);

    $evenementc->updateeve($evenement,$_GET['id_eve']);

    $success = 1;
     header("location:gestion_evenement.php");


//}
}