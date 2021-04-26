<?php
include_once "connection.php" ;

    class animalC {
        public function afficheranimal() {
            try{
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    'SELECT * FROM animaux'
                );
                $query->execute();
           $result = $query->fetchAll();
            }
            catch(PDOException $e){
                $e->getMessage();
            }
            echo("<table border='1' align='center'><tr>");
                // output data of each row
            foreach($result as $rows)
            {
                echo ("<td>");
                echo $rows['titre'];
                echo ("</td>");
                echo ("<td>");
                echo $rows['prix'];
                echo ("dt</td>");
                echo ("<td>");
                echo("<img src=..\assets\img\album1.jpg width='150px' ".$rows['image'].">");
                echo ("</td>");
                echo("<td>");
                echo("<a href=edit.php?id=".$rows['idAlbum'].">Edit</a>");
                echo ("</td>");
                echo ("<td>");
                echo("<a href=delete.php?id=".$rows['idAlbum'].">Delete</a>");
                echo ("</td>");
            echo("</tr>");
        }
            echo("</table>");
        }




        public function addanimal($animal) {

            $sql="insert into animaux(race,espece,date_naissance,prix,origine,image) values( :race,espece, :date_naissance, :prix, :origine, :image)";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([

					'race' => $animal->getrace(),
                    'espece' => $animal->getespece(),
                    'date_naissance' => $animal->getdate_naissance(),
                    'prix' => $animal->getprix(),
                    'origine' => $animal->getorigine(),
                    'image' => $animal->getimage()

				]);

    	}

        public function deleteanimal($id) {
    		$sql='delete from animaux where ID_animal= :id';
    		$db=config::getConnexion();
    		$query=$db->prepare($sql);
    		$query->execute([
				'id_animal' => $id]);
        }

        public function updateanimal($animal,$id) {
            $sql="update animaux SET
                                race = :race,
                                espece = :espece,
                                date_naissance = :date_naissance,
                                prix = :prix,
                                origine = :origine,
                                image = :image,
                            WHERE id_animal = :id";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'race' => $animal->getrace(),
                'espece' => $animal->getespece(),
                'date_naissance' => $animal->getdate_naissance(),
                'prix' => $animal->getprix(),
                'origine' => $animal->getorigine(),
                'image' => $animal->getimage(),
                            'id_animal' => $id
                        ]);
            }

    }
