<?php
include_once '../Model/avis.php';
include_once '../Controller/avisC.php';

	$id_avis=$_POST['id_avis'];
	avis= new avis( $_POST['description'], $_POST['note'], $_POST['date_avis']);
	$avisc= new avisC();
	$avis->getid_avis($id_avis);
	$albumc->updateavis($avis,$id_avis);
	header('Location:showavis.php');

	?>
