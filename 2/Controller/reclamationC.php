<?php
include_once 'connection.php';

class reclamationC{

	public function afficherreclamation(){

		$sql="SELECT reclamations.*,utilisateur.nom,utilisateur.prenom FROM reclamations inner join utilisateur on reclamations.id_user=utilisateur.id where id_user='3'";
		try{
				$pdo=config::getConnexion();
			 	$result= $pdo->query($sql);
				return $result;
			}
			catch(PDOException $e){
					$e->getMessage();
			}

}

public function afficherreclamationF(){

	$sql="SELECT reclamations.*,utilisateur.nom,utilisateur.prenom FROM reclamations inner join utilisateur on reclamations.id_user=utilisateur.id ";
	try{
			$pdo=config::getConnexion();
			$result= $pdo->query($sql);
			return $result;
		}
		catch(PDOException $e){
				$e->getMessage();
		}

}
public function ajouterreclamation($reclamations){
	$sql="insert into reclamations(type_reclamation,date_reclamation,description_reclamation,id_user) values(:type_reclamation,NOW(),:description_reclamation, :id_user)";
		            $db=config::getConnexion();
	            $query=$db->prepare($sql);
	            $query->execute([

						'type_reclamation' => $reclamations->gettype_reclamation(),
	                    'description_reclamation' => $reclamations->getdescription_reclamation(),
											'id_user' => $reclamations->getId_user()


	                    ]);



}

public function spprimerreclamation($id_reclamation){

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
}

public function updatereclamation($reclamations,$id_reclamation)
			{
				$sql="update reclamations SET type_reclamation = :type_reclamation,description_reclamation = :description_reclamation where id_reclamation=:id_reclamation";
			             $db=config::getConnexion();
			             $query=$db->prepare($sql);
			             $query->execute([
										 'type_reclamation' => $reclamations->gettype_reclamation(),
									 						'description_reclamation' => $reclamations->getdescription_reclamation(),
									 					'id_reclamation' => $id_reclamation
			                         ]);
			}


public function recupererreclamation($id_reclamation){
			$sql="SELECT * From reclamations where id_reclamation='$id_reclamation'";
			$db=config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}

}
public function chercherreclamation($id){
			$sql="SELECT * From reclamations where id_reclamation='".$id."' ";
			$db=config::getConnexion();
			try{

			$liste=$db->query($sql);
			return $liste;
			}
			catch(Exception $e){
				die('Erreur:' .$e->getMessage());
			}

}




}

?>
