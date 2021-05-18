<?php
if(isset($_GET['id'])){
    include "../controller/SponsorC.php";
    $sponsorc=new SponsorC();
    $sponsorc->supprimerSponsor($_GET['id']);
}
header("location:sponsors.php");
?>
