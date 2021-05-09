
<?php
  include "../model/eve.php";
  include "../controller/eveC.php";
  $evenemenc = new evenementC();
  if (isset($_GET["id_eve"])&& isset($_GET["date_eve"]) && isset($_GET["type_eve"]))
  {//{if (empty($_POST["nom"])&& empty($_POST["prenom"]) && empty($_POST["dateNais"]) && empty($_POST["email"]) && empty($_POST["tel"]) && empty($_POST["adresse"]) && empty($_POST["login"]) && empty($_POST["pass"])) {
    $id_eve = $_GET['id_eve'];
    $date_eve = $_GET['date_eve'];
    $type_eve = $_GET['type_eve'];

  $evenementc->updateeve($id_eve);
 header("location:modifiereve.php");
  }
  else
  {
      echo "Error deleting record"; // display error message if not delete
  }


   
   
  ?>
