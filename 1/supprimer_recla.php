<?php

include_once 'connection.php';





$id_reclamation=$_GET['id'];

     $sql="DELETE FROM  reclamations where id_reclamation=:id_reclamation";
   			$db=config::getConnexion();
   			try{
   			$req=$db->prepare($sql);
   			$req->bindValue(':id_reclamation',$id_reclamation);
   			$req->execute();
   			}
   			catch(Exception $e){
   				die('Erreur:' .$e->getMessage());
   			}


   //aficher apres la supression
  header("location:index.php"); // redirects to all records page


?>
