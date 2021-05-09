<?php
  include "../model/sponsor.php";
  include "../controller/sponsorC.php";

  $sponsorc= new sponsorC();
   if (isset($_GET['id_spons'])) // get id through query string
   {
  $id_spons = $_GET['id_spons'];
  $sponsorc->spprimerspons($id_spons);
  //aficher apres la supression
  header("location:gestion_sponsor.php"); // redirects to all records page
   }
   else
  {
      echo "Error deleting record"; // display error message if not delete
  }

  ?>