<?PHP
  include_once "../connection.php" ;

class EventC {
    function ajouterEvent($event){
        $sql="INSERT INTO event (date,type,description,nom,image) VALUES (:date,:type,:description,:nom,:image)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':date',$event->getDate());
            $req->bindValue(':type',$event->getType());
            $req->bindValue(':description',$event->getDescription());
            $req->bindValue(':nom',$event->getnom());
            $req->bindValue(':image',$event->getimage());

            $req->execute();


        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherEvent(){
        $sql="SELECT * FROM Event ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherEventApprouve(){
        $sql="SELECT Event.*,nom,prenom FROM Event inner join user on Event.user_id=user.id where status=1";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function afficherEventUser($user_id){
        $sql="SELECT * FROM Event where user_id='$user_id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function approuverEvent($event_id){
        $sql="Update event set status=:status where id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':status',1);
            $req->bindValue(':id',$event_id);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function modifierEvent($event,$id){
        $sql="Update event set nom=:nom , date=:date,description=:description,type=:type,image=:image where id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':date',$event->getDate());
            $req->bindValue(':type',$event->getType());
            $req->bindValue(':description',$event->getDescription());
            $req->bindValue(':nom',$event->getnom());
            $req->bindValue(':image',$event->getimage());
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function supprimerEvent($id){
        $sql="DELETE FROM Event where id= :id";
        $db = config::getConnexion();
        try{
            $req1=$db->prepare("DELETE FROM Affectation where event_id= :id");
            $req1->bindValue(':id',$id);
            $req1->execute();

            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererEvent($id){
        $sql="SELECT * from event where id='$id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function recupererEventAffectation($id){
        $sql="SELECT event.*,sponsor.nom,sponsor.prenom,sponsor.email from affectation inner join event on affectation.event_id=event.id inner join sponsor on affectation.sponsor_id=sponsor.id  where event.id='$id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function existeAffectation($id){
        $sql="SELECT * from event where id='$id' and status=1";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste->rowCount();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function affecterSponsor($sponsor_id,$event_id){
        $sql="INSERT INTO affectation (sponsor_id,event_id) VALUES (:sponsor_id,:event_id)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':sponsor_id',$sponsor_id);
            $req->bindValue(':event_id',$event_id);
            $req->execute();


        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function statsEvent($type){
        $sql="SELECT * from event where type ='$type' and status=1";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste->rowCount();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function rechercheEventApprouve($txt){
        $sql="SELECT Event.*,nom,prenom FROM Event inner join user on Event.user_id=user.id where status=1 and Event.type like '$txt%'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

?>
