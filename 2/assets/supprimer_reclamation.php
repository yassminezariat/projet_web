<?php

include_once '../Controller/reclamationC.php';

 $reclamationC = new reclamationC();
 if (isset($_GET['id'])) // get id through query string
 {
   $reclamationC-> spprimerreclamation($_GET['id']);
   //aficher apres la supression
  header("location:gestion_reclamation_FCL.php"); // redirects to all records page
 }

?>
