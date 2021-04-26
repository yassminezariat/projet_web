<?php
session_start();

$_SESSION['id']=1;

    include_once '../Controller/avisC.php';
    //$tit=$_GET['type_avis'];
    $search = $_GET['search'];
    $column = $_GET['column'];
    if(isset($_GET['search']) && isset($_GET['column']) ){


      echo("<table border='1' align='center'><tr>");
          echo("<tr>");
              echo("<th>");
              echo ("type de l'avis");
               echo ("</th>");
               echo("<th>");
               echo ("Note");
                echo ("</th>");
                echo("<th>");
                echo ("Avis");
                 echo ("</th>");
                 echo("<th>");
                 echo ("Date de l'envoi de l'avis");
                  echo ("</th>");
                  echo("<th>");
                  echo ("Le client");
                   echo ("</th>");
          echo("</tr>");

    $avisC=new avisC();
    $pdo=config::getConnexion();
        $query= $pdo ->prepare("SELECT avis.*,utilisateur.nom,utilisateur.prenom FROM avis inner join utilisateur on avis.id_user=utilisateur.id where $column like '%$search%'");
        $query->execute();
        $result = $query->fetchAll();


         // output data of each row
     foreach($result as $rows)
     {
         echo (" <td>");
         echo $rows['type_avis'];
         echo ("</td>");
         echo ("<td>");
         echo $rows['note'];
         echo ("</td>");
         echo ("<td>");
         echo $rows['description'];
         echo ("</td>");
         echo ("<td>");
         echo $rows['date_avis'];
         echo ("</td>");
         echo ("<td>");
         echo $rows['nom'];
         echo $rows['prenom'];
         echo ("</td>");

     echo("</tr>");
 }
echo("</table>");}
else
{echo("can't find the title");}
?>
