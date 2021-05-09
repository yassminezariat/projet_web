<?php
    include "../model/sponsor.php";
    include "../controller/sponsorC.php";
  $sponsorc = new sponsorC();
  if (isset($_GET["id_spons"])&& isset($_GET["date_spons"])&& isset($_GET["email_spons"])&& isset($_GET["nom_spons"])&& isset($_GET["prenom_spons"])&& isset($_GET["type_spons"]) )
  {//{if (empty($_POST["nom"])&& empty($_POST["prenom"]) && empty($_POST["dateNais"]) && empty($_POST["email"]) && empty($_POST["tel"]) && empty($_POST["adresse"]) && empty($_POST["login"]) && empty($_POST["pass"])) {
    $id_spons = $_GET['id_spons'];
    $date_spons = $_GET['date_spons'];
    $email_spons = $_GET['email_spons'];
    $nom_spons = $_GET['nom_spons'];
    $prenom_spons = $_GET['prenom_spons'];
    $type_spons = $_GET['type_spons'];
    $sponsorc->updatespons($id_spons)
 header("location:modifierspons.php");
  }
  else
  {
      echo "Error deleting record"; // display error message if not delete
  }


   
   
  ?>
