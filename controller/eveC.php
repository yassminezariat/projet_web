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
            .$rows['type_eve']. "</td><td>"."<a href=supprimereve.php?id_eve=".$rows['id_eve'].">suppprimer</a>"."</td>. .</tr>" . "</td><td>"."<a href=modifiereve.php?id_eve=".$rows['id_eve'].">modifier</a>"."</td>. .</tr>"    ;

    }
        echo("</table>");
    }








    public function ajoutereve($eve)
    {
        $sql="insert into even (id_eve,date_eve,type_eve) values(:id_eve,:date_eve,:type_eve)";
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
        

        public function updateeve($eve,$id_eve)
        {
            $sql="UPDATE even SET id_eve = :id_eve,date_eve = :date_eve,type_eve= :type_eve WHERE id_eve =:id_eve";
                     $db=config::getConnexion();
                     $query=$db->prepare($sql);
                     $query->execute([
                                     'type_eve' => $eve->gettype_eve(),
                                      'date_eve' => $eve->getdate_eve(),
                                     'id_eve' => $id_eve
                                 ]);
        }

    public function recuperereve($id_eve)
    {
        $sql="SELECT *From even where id_eve=".$id_eve."";
        
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die ('erreur:' .$e->getMessage());}
    }

}
?>