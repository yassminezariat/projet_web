<?php

include '../Model/avis.php';
include '../Controller/avisC.php';
	$id_avis=$_GET ['id_avis'];
	$avisC= new avisC();
	$avis=$avisC->recupereravis($id_avis);
	?>
	<html>
 <head>
   <title></title>

 </head>
 <body class="font-montserrat">



<div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">modifier personne</h3>
                            </div>
                            <div class="card-body">

                                <div class="form-group">

	<?php
	foreach($avis as $row){

		echo " <form action='recuperer.php' method='post'> ";
  echo " <input type='number' name='id_avis' value=",$row['id_avis'],"  >";
   echo "    <Label class='form-label' >Message:</Label> ";


	  echo " <input class='form-control' type='text' name='message' value=",$row['message'],">";





   echo " <Label class='form-label' >note: </Label> ";
       echo " <input  type='text'class='form-control' name='note' value=",$row['note'],">";





      echo "  <Label class='form-label' >date: </Label> ";
    echo "   <input type='file' id='date' name='date'  value=",$row['date']," >";
       echo "  <br>";

   echo " <input class='btn btn-primary' type='submit' value='modifier' >";
   echo " <input  class='btn btn-primary' type='reset' value='Annuler'>";

echo "</form>";

	}
	?>
	</body>
		</html>
