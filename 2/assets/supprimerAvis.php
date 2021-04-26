<?php

include_once '../Controller/avisC.php';

 $avisC = new avisC();
 $liste=$avisC->afficheravis();

 if (isset($_GET['id'])) // get id through query string
 {
   $avisC->spprimeravis($_GET['id']);
   //aficher apres la supression
  header("location:gestion_reclamation_FCL.php"); // redirects to all records page
 }

?>
