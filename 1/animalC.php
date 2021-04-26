<?php
include_once "..\back\connection.php" ;

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
            {   $image=$rows['image'];
                $image="..\back\images\\$image";
                echo "<div class='col-lg-4 col-sm-6'>";
                echo "<div class=box13>";
                echo "<img src='",$image,"' class='img-fluid img-thumbnail'/>";
                echo "<div class='box-content'>";
                echo "<h3 class='title' data-blast='color'>",$rows['espece']," </h3>";
                echo "<span class='post'>",$rows['race'],"</span>";
                echo "<span class='post'>Date de naissance : ",$rows['date_naissance'],"</span>";
                echo "<span class='post'>Origine : ",$rows['origine'],"</span>";
                echo "<span class='post'>Prix : ",$rows['prix'],"dtns</span>";
                echo"</div> </div></div> ";
            }




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
