<?php
include "../model/eve.php";
include "../controller/eveC.php";


$evenemet=new evenement($_POST['id_eve'],$_POST['date_eve'],$_POST['type_eve']);

$evenementc= new evenementC();

$evenement->setid_eve($id_eve);

$evenementc->updateeve($evenement);

header('location:gestion_evenement.php');
?>