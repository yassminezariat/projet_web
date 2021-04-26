<?php
include_once "../connection.php" ;

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

            foreach($result as $rows)
            {  $image=$rows['image'];
                $image="..\images\\$image";
                echo "<tr><td>" . $rows['ID_animal']. "</td><td>" . $rows['race'] . "</td><td>"
                .$rows['espece']."</td><td>" .$rows['date_naissance']."</td><td>" .$rows['prix']."</td><td>" .$rows['origine']
                ."</td><td>" ."<img src='",$image,"' width='175' height='200' />"."</td><td>"."<a href=modifier_animal.php?ida=".$rows['ID_animal']."><img src=../images/pencil.png width=35 height=35></a>"
                ."</td><td>"."<a href=..\Views\delete_animal.php?ida=".$rows['ID_animal']."><img src=../images/button_cancel.png width=35 height=35></a>"."</td></tr>";

        }
            echo("</table>");
        }




        public function addanimal($animal) {

            $sql="insert into animaux(race,espece,date_naissance,prix,origine,image) values ( :race , :espece , :date_naissance , :prix , :origine , :image)";
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
				'id' => $id]);
        }

        public function updateanimal($animal,$id) {
            $sql='update animaux SET
                                race = :race,
                                espece = :espece,
                                date_naissance = :date_naissance,
                                prix = :prix,
                                origine = :origine,
                                image = :image
                            WHERE `animaux`.`ID_animal` = :id ;';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'race' => $animal->getrace(),
                'espece' => $animal->getespece(),
                'date_naissance' => $animal->getdate_naissance(),
                'prix' => $animal->getprix(),
                'origine' => $animal->getorigine(),
                'image' => $animal->getimage(),
                            'id' => $id
                        ]);
            }

    }
?>
