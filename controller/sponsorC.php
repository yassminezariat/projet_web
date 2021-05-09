<?php
include "../configuration.php";
class sponsorC
{

public function afficherspons()
{
    try{
        $pdo=config::getConnexion();
            $query= $pdo ->prepare(
                'SELECT * FROM sponsor'
            );
            $query->execute();
       $result = $query->fetchAll();
    }
    catch(PDOException $e){
        $e->getMessage();
    }
    foreach($result as $rows)
    {
        echo "<tr><td>" . $rows['id_spons']. "</td><td>" . $rows['date_spons'] . "</td><td>"
        .$rows['email_spons']. $rows['nom_spons']. "</td><td>" .$rows['prenom_spons']. "</td><td>" .$rows['type_spons']. "</td><td>" ."</td><td>"."<a href=supprimer_spons.php?id_spons=".$rows['id_spons'].">suppprimer</a>"."</td>. .</tr>" . "</td><td>"."<a href=modifierspons.php?id_spons=".$rows['id_spons'].">modifier</a>"."</td>. .</tr>"  ;

}
    echo("</table>");

}




public function ajouterspons($spons)
    {
        $sql="INSERT  into sponsor (id_spons,date_spons,email_spons,nom_spons,prenom_spons,type_spons) values (:id_spons,:date_spons,:email_spons,:nom_spons,:prenom_spons,:type_spons)";
        $db=config::getConnexion();
        $query=$db->prepare($sql);
        $query->execute([

            'id_spons' => $spons->getid_spons(),
            'date_spons' => $spons->getdate_spons(),
            'email_spons' => $spons->getemail_spons(),
            'nom_spons' => $spons->getnom_spons(),
            'prenom_spons' => $spons->getprenom_spons(),
            'type_spons' => $spons->gettype_spons()
            ]);
    }


    public function spprimerspons($id_spons){

        $sql="DELETE FROM sponsor where id_spons=:id_spons";
        $db=config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->bindValue(':id_spons',$id_spons);
        $req->execute();
        }
        catch(Exception $e){
        die('Erreur:' .$e->getMessage());
        }
        }
        

        public function chercherspons($id_spons)
        {
            $sql="SELECT * from sponsor order by id_spons DESC";
            if (isset($_GET['id_spons']) AND !empty($_GET['id_spons']) )
            {
                $recherche=htmlspecialchars($_GET['id_spons']);
                $sql="SELECT * From sponsor where id_spons like "%'.$recherche.'%" ORDER BY id_spons DESC  ";
            }
    
        }
           
       
   
}
?>