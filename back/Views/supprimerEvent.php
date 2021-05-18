<?php
include "../controller/EventC.php";
$eventc=new EventC();
if(isset($_GET['id'])){
    $eventc->supprimerEvent($_GET['id']);
}
header("location:gestion_event.php");
?>
