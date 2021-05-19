<?php
include_once "..\back\connection.php" ;

    class animalC {
        public function afficheranimal() {
            try{
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    'SELECT espece FROM animaux group by espece'
                );
                $query->execute();
           $result = $query->fetchAll();
            }
            catch(PDOException $e){
                $e->getMessage();
            }

            foreach($result as $rows)
            {


              $sql=" select * from animaux where espece=:espece";
              $db=config::getConnexion();
              $query=$db->prepare($sql);

              $query->execute(['espece' =>$rows['espece'] ]);
              $anim = $query->fetchAll();


              echo "<h4 class='main-title-w3pvt' align='center' data-blast='bgColor' style='background-color:powderblue;'>Nos ",$rows['espece']," :</h4>";
              echo "<div class='row py-4 mt-lg-5  team-grid'>";

             foreach($anim as $an)
                {$image=$an['image'];
                $image="..\back\images\\$image";
                echo "<div class='col-lg-4 col-sm-6'>";
                echo "<div class=box13>";
                echo "<img src='",$image,"' class='img-fluid img-thumbnail'/>";
                echo "<div class='box-content'>";
                echo "<h3 class='title' data-blast='color'>",$an['espece']," </h3>";
                echo "<span class='post'>",$an['race'],"</span>";
                echo "<span class='post'>Date de naissance : ",$an['date_naissance'],"</span>";
                echo "<span class='post'>Origine : ",$an['origine'],"</span>";
                echo "<span class='post'>Prix : ",$an['prix'],"dtns</span>";
                echo"</div> </div></div> ";
            }
            echo "</div>";




            $sql="select * from produits WHERE appartenance=:espece";
            $db=config::getConnexion();
            $query=$db->prepare($sql);$query->execute(['espece' =>$rows['espece'] ]);
            $prod = $query->fetchAll();


       echo "<h5 class='main-title-w3pvt' align='center' style='background-color:tomato;'>Les produits de nos ",$rows['espece']," :</h5>";
      echo "<div class='row py-4 mt-lg-5  team-grid'>";

           foreach($prod as $pro)
       {    $image=$pro['image'];
              $image="..\back\images\\$image";
              echo "<div class='col-lg-4 col-sm-6'>";
              echo "<div class=box13>";
              echo "<img src='",$image,"' class='img-fluid img-thumbnail'/>";
              echo "<div class='box-content'>";
              echo "<h3 class='title' data-blast='color'>",$pro['type']," </h3>";
              echo "<span class='post'>",$pro['appartenance'],"</span>";
              echo "<span class='post'>Description: ",$pro['description'],"</span>";
              echo "<span class='post'>Prix : ",$pro['prix'],"dtns</span>";
              echo"</div> </div></div> ";
          }
          echo "</div>";


}

        }


        public function afficherplante() {
            try{
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    'SELECT espece FROM plantes group by espece'
                );
                $query->execute();
           $result = $query->fetchAll();
            }
            catch(PDOException $e){
                $e->getMessage();
            }

            foreach($result as $rows)
            {


              $sql=" select * from plantes where espece=:espece";
              $db=config::getConnexion();
              $query=$db->prepare($sql);

              $query->execute(['espece' =>$rows['espece'] ]);
              $anim = $query->fetchAll();


              echo "<h4 class='main-title-w3pvt' align='center' data-blast='bgColor' style='background-color:powderblue;'>Nos ",$rows['espece']," :</h4>";
              echo "<div class='row py-4 mt-lg-5  team-grid'>";

             foreach($anim as $an)
                {$image=$an['image'];
                $image="..\back\images\\$image";
                echo "<div class='col-lg-4 col-sm-6'>";
                echo "<div class=box13>";
                echo "<img src='",$image,"' class='img-fluid img-thumbnail'/>";
                echo "<div class='box-content'>";
                echo "<h3 class='title' data-blast='color'>",$an['espece']," </h3>";
                echo "<span class='post'>",$an['environnement'],"</span>";
                //echo "<span class='post'>Date de naissance : ",$an['date_naissance'],"</span>";
                echo "<span class='post'>Origine : ",$an['origine'],"</span>";
                echo "<span class='post'>Prix : ",$an['prix'],"dtns</span>";
                echo"</div> </div></div> ";
            }
            echo "</div>";




            $sql="select * from produits WHERE appartenance=:espece";
            $db=config::getConnexion();
            $query=$db->prepare($sql);$query->execute(['espece' =>$rows['espece'] ]);
            $prod = $query->fetchAll();


       echo "<h5 class='main-title-w3pvt' align='center' style='background-color:tomato;'>Les produits de nos ",$rows['espece']," :</h5>";
      echo "<div class='row py-4 mt-lg-5  team-grid'>";

           foreach($prod as $pro)
       {    $image=$pro['image'];
              $image="..\back\images\\$image";
              echo "<div class='col-lg-4 col-sm-6'>";
              echo "<div class=box13>";
              echo "<img src='",$image,"' class='img-fluid img-thumbnail'/>";
              echo "<div class='box-content'>";
              echo "<h3 class='title' data-blast='color'>",$pro['type']," </h3>";
              echo "<span class='post'>",$pro['appartenance'],"</span>";
              echo "<span class='post'>Description: ",$pro['description'],"</span>";
              echo "<span class='post'>Prix : ",$pro['prix'],"dtns</span>";
              echo"</div> </div></div> ";
          }
          echo "</div>";


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
