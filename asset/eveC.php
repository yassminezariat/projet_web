<?php
include "../configuration.php";
class evenementC
{    
    public function affichereve() {
        try{
            $pdo=config::getConnexion();
            $query= $pdo ->prepare(
                'SELECT * FROM even'
            );
            $query->execute();
       $result = $query->fetchAll();
        }
        catch(PDOException $e){
            $e->getMessage();
        }

        foreach($result as $rows)
        {
            echo "<tr><td>" . $rows['id_eve']. "</td><td>" . $rows['date_eve'] . "</td><td>"
            .$rows['type_eve']. "</td><td>"."<a href=supprimereve.php?id_eve=".$rows['id_eve'].">suppprimer</a>"."</td>. .</tr>" . "</td><td>"."<a href=modifiereve.php?id_eve=".$rows['id_eve'].">modifier</a>"."</td>. .</tr>" . "</td><td>".;
            
    }
        echo("</table>");
    }








    public function ajoutereve($eve)
    {
        $sql="INSERT  into even (id_eve,date_eve,type_eve) values(:id_eve,:date_eve,:type_eve)";
        $db=config::getConnexion();
        $query=$db->prepare($sql);
        $query->execute([ 'id_eve' => $eve->getid_eve(),'date_eve' => $eve->getdate_eve(),'type_eve' => $eve->gettype_eve()]);
    }

    
    public function spprimereve($id_eve){

        $sql="DELETE FROM even where id_eve=:id_eve";
        $db=config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $req->bindValue(':id_eve',$id_eve);
        $req->execute();
        }
        catch(Exception $e){
        die('Erreur:' .$e->getMessage());
        }
        }
        

        public function updateeve($evenement,$id_eve)
        {
    $sql="UPDATE even SET  date_eve= :date_eve,type_eve= :type_eve WHERE id_eve = :id_eve";
    $db=config::getConnexion();
    
            $query=$db->prepare($sql);
            $query->execute([
                'date_eve' => $evenement->getdate_eve(),
                'type_eve' => $evenement->gettype_eve(),
                            'id_eve' => $id_eve
                        ]);

        }

   




    public function cherchereve($id_eve){
        $sql="SELECT * from even order by id_eve DESC";
        if (isset($_GET['id_eve']) AND !empty($_GET['id_eve']) )
        {
            $recherche=htmlspecialchars($_GET['id_eve']);
            $sql="SELECT * From even where id_eve like "%'.$recherche.'%" ORDER BY id_eve DESC  ";

        }
       
        
}
?>
