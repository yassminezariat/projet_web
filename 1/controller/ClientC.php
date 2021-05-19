<?php


include_once "connection.php" ;




class clientC
{
    function ajouterclient($Client){
        $sql="INSERT INTO client (nom,prenom,email,login,password,adresse,tel)
            VALUES (:nom,:prenom,:email,:login,:password,:adresse,:tel)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $Client->getNom(),
                'prenom' => $Client->getPrenom(),
                'email' => $Client->getEmail(),
                'login' => $Client->getLogin(),
                'password' => $Client->getPassword(),
                'adresse' => $Client->getAdresse(),
                'tel' => $Client->getTel()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }



    function afficherclient()
    {
        $sql = "SELECT * FROM client";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficherclient1()
    {
        $sql = "SELECT * FROM client limit 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficherprofil($email)
    {
        $sql = "SELECT FROM client where email=:email";
         $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':email',$email);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function supprimerclient($idClient){
        $sql="DELETE FROM client WHERE idClient= :idClient";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idClient',$idClient);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierclient($client,$idClient){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE client SET
				      nom = :nom,
                    prenom = :prenom,
                    email = :email,
                    login = :login,
                    password = :password,
                    adresse = :adresse,
                    tel = :tel

                    WHERE idClient = :idClient'
            );
            $query->execute([
                'nom' => $client->getNom(),
                'prenom' => $client->getPrenom(),
                'email' => $client->getEmail(),
                'login' => $client->getLogin(),
            'password' => $client->getPassword(),
                'adresse' => $client->getAdresse(),
                'tel' => $client->getTel(),
                'idClient' => $idClient

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo "Echeeeec";
            $e->getMessage();
        }
    }

    function recupererutilisateur($idClient)
    {
        $sql="SELECT * from client where idClient=:idClient";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'idClient'=> $idClient
                ]
            );

            $client = $query->fetch(PDO::FETCH_OBJ);
            return $client;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererrole($idClient)
    {
        $sql = "SELECT * from client where email= :idClient";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idClient' => $idClient
            ]);

            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function connexionUser($email,$password)
    {
        $sql = "SELECT * FROM client WHERE Email='" . $email . "' and Password = '" . $password . "'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $count = $query->rowCount();
            if ($count == 0) {
                $message = "pseudo ou le mot de passe est incorrect";
            } else {
                $x = $query->fetch();
                $message = $x['role'];
            }
        } catch (Exception $e) {
            $message = " " . $e->getMessage();
        }
        return $message;
    }
    function idClientt($email,$password)
    {
        $sql = "SELECT idClient FROM client WHERE Email='" . $email . "' and Password = '" . $password . "'";
        $db = config::getConnexion();

            $query = $db->prepare($sql);
            $query->execute();
            $count = $query->fetch();


        return $count;
    }
    function recuperercompte($email)
    {
       $sql="SELECT * from client where email=:email";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'email'=> $email
                ]
            );

            $client = $query->fetch(PDO::FETCH_OBJ);
            return $client;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
