<?PHP
	include_once "../connection.php" ;
	

	class employeC
	{
		/*Fonction ajouter */
		function ajouteremploye($Employe)
		{
			$sql="INSERT INTO employes (nom, prenom, email, age, numero, login)
			VALUES (:nom, :prenom, :email, :age, :numero, :login)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);

				$query->execute
				([
					'nom' => $Employe->getName(),
					'prenom' =>$Employe->getprenom(),
					'email' => $Employe->getemail(),
					'age' => $Employe->getage(),
                    'numero' => $Employe->getnumero(),
                    'login' => $Employe->getlogin()

				]);
				//echo $query->rowCount() . " records Added successfully <br>";
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
		}

		/*Fonction modifier */
		function modifyemploye($Employe, $idE)
		{
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE employes SET
                        nom = :nom,
					    prenom = :prenom,
						email = :email,
						age = :age,
                        numero = :numero,
						login = :login

					WHERE idE = :idE'
				);
				$query->execute([
                    'nom' => $Employe->getName(),
					'prenom' =>$Employe->getprenom(),
					'email' => $Employe->getemail(),
					'age' => $Employe->getage(),
                    'numero' => $Employe->getnumero(),
                    'login' => $Employe->getlogin(),
                    'idE' => $idE
				]);
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
        /*Fonction supprimer */
		function deleteemploye($idE)
		{
			$sql="DELETE FROM employes WHERE idE= :idE";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idE',$idE);
			try{
				$req->execute();

			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

        /*Fonction afficher */
		function displayemploye()
		{

			$sql="SELECT * FROM employes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		/****/
		function recupereremploye($idE)
		{
			$sql="SELECT * from employes where idE=$idE";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Employe=$query->fetch();
				return $Employe;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		/*function recupererGift1($id)
		{
			$sql="SELECT * from gift where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Gift= $query->fetch(PDO::FETCH_OBJ);
				return $Gift;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}*/
	}

?>
