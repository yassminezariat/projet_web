<?php


class avisC{

	public function afficheravis(){

		$sql="SELECT avis.*,utilisateur.nom,utilisateur.prenom FROM avis inner join utilisateur on avis.id_user=utilisateur.id where id_user='3'";
		try{
				$pdo=config::getConnexion();
			 	$result= $pdo->query($sql);
				return $result;
			}
			catch(PDOException $e){
					$e->getMessage();
			}

}
public function afficheravisF(){

	$sql="SELECT avis.*,utilisateur.nom,utilisateur.prenom FROM avis inner join utilisateur on avis.id_user=utilisateur.id";
	try{
			$pdo=config::getConnexion();
			$result= $pdo->query($sql);
			return $result;
		}
		catch(PDOException $e){
				$e->getMessage();
		}

}

public function ajouteravis($avis){
	$sql="insert into avis(description,note,date_avis,id_user,type_avis) values(:description,:note,NOW(),:id_user, :type_avis)";
		            $db=config::getConnexion();
	            $query=$db->prepare($sql);
	            $query->execute([

						'description' => $avis->getdescription(),
	                    'note' => $avis->getnote(),
											'id_user' => $avis->getId_user(),
											'type_avis' => $avis->gettype_avis()

	                    ]);



}

public function spprimeravis($id_avis){

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
}

public function updateavis($avis,$id_avis)
			{
				$sql="update avis SET description = :description,note = :note,type_avis = :type_avis WHERE id_avis =:id_avis";
			             $db=config::getConnexion();
			             $query=$db->prepare($sql);
			             $query->execute([
										 'description' => $avis->getdescription(),
															 'note' => $avis->getnote(),
			                             'id_avis' => $id_avis,
																	 'type_avis' => $avis->gettype_avis()
			                         ]);
			}



			public function recupereravis($id_avis){
						$sql="SELECT * From avis where id_avis='$id_avis'";
						$db=config::getConnexion();
						try{
						$liste=$db->query($sql);
						return $liste;
						}
						catch(Exception $e){
							die('Erreur:' .$e->getMessage());
						}

			}
public function chercheravis($id_avis){
			$sql="SELECT * From avis where id_avis='".$id_avis."' ";
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
