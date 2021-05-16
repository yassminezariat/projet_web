<?PHP
require_once '../config.php';

class SponsorC {
    function ajouterSponsor($sponsor){
        $sql="INSERT INTO sponsor (nom,prenom,email,type) VALUES (:nom,:prenom,:email,:type)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':type',$sponsor->getType());
            $req->bindValue(':nom',$sponsor->getNom());
            $req->bindValue(':prenom',$sponsor->getPrenom());
            $req->bindValue(':email',$sponsor->getEmail());
            $req->execute();


        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherSponsor(){
        $sql="SELECT * FROM sponsor";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function modifierSponsor($sponsor){
        $sql="Update sponsor set nom=:nom,prenom=:prenom,email=:email,type=:type where id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':type',$sponsor->getType());
            $req->bindValue(':nom',$sponsor->getNom());
            $req->bindValue(':prenom',$sponsor->getPrenom());
            $req->bindValue(':email',$sponsor->getEmail());
            $req->bindValue(':id',$sponsor->getId());
            $req->execute();


        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function supprimerSponsor($id){
        $sql="DELETE FROM sponsor where id= :id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $req->bindValue(':id',$id);
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    function recupererSponsor($id){
        $sql="SELECT * from sponsor where id='$id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function existSponsor($id){
        $sql="SELECT * from affectation where sponsor_id='$id'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste->rowCount();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function rechercherSponsor($str){
        $sql="SELECT * FROM sponsor where type like '$str%' or nom like '$str%' or prenom like '$str%' ";
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


