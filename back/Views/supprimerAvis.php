<?php

include_once '../Controller/avisC.php';

 $avisC = new avisC();
 if (isset($_GET['id'])) // get id through query string
 {
   $avisC->spprimeravis($_GET['id']);
   //aficher apres la supression
  header("location:gestion_avis.php"); // redirects to all records page
 }

?>
