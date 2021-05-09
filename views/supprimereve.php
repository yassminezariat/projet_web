
<?php
  include "../model/eve.php";
  include "../controller/eveC.php";
   $evenemenc = new evenementC();
   if (isset($_GET['id_eve'])) // get id through query string
   {
  $id_eve = $_GET['id_eve'];
  $evenemenc->spprimereve($id_eve);
  //aficher apres la supression
  header("location:gestion_evenement.php"); // redirects to all records page
   }
   else
  {
      echo "Error deleting record"; // display error message if not delete
  }

  ?>
