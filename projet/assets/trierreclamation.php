<?php
session_start();

$_SESSION['id']=1;

    include_once '../Controller/reclamationC.php';
    //$tit=$_GET['type_avis'];

    $column = $_GET['column'];
    if( isset($_GET['column']) ){


                   echo("<table border='1' align='center'><tr>");
                    echo("<tr>");
                    echo("<th>");
                    echo ("type_reclamation");
                    echo ("</th>");
                    echo("<th>");
                    echo ("Date de l'envoi de la reclamation");
                    echo ("</th>");
                    echo("<th>");
                    echo ("description_reclamation");
                    echo ("</th>");
                    echo("<th>");
                    echo ("Le client");
                    echo ("</th>");
                    echo("</tr>");
    $reclamationsC=new reclamationsC();
    $pdo=config::getConnexion();
        $query= $pdo ->prepare("SELECT reclamations.*,utilisateur.nom,utilisateur.prenom FROM reclamations inner join utilisateur on reclamations.id_user=utilisateur.id order by $column ");
        $query->execute();
        $result = $query->fetchAll();


         // output data of each row
     foreach($result as $rows)
     {
       echo (" <td>");
       echo $rows['type_reclamation'];
       echo ("</td>");
       echo ("<td>");
       echo $rows['date_reclamation'];
       echo ("</td>");
       echo ("<td>");
       echo $rows['description_reclamation'];
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
