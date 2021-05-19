<?php

include_once 'connection.php';





$id_avis=$_GET['id'];

 $sql="DELETE FROM  avis where id_avis=:id_avis";
     $db=config::getConnexion();
     try{
     $req=$db->prepare($sql);
     $req->bindValue(':id_avis',$id_avis);
     $req->execute();
     }
     catch(Exception $e){
       die('Erreur:' .$e->getMessage());
     }


   //aficher apres la supression
  header("location:index.php"); // redirects to all records page


?>
