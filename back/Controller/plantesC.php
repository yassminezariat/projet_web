<?php
include_once "../connection.php";

    class planteC {
        public function afficherplante() {
            try{
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    'SELECT * FROM plantes'
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
                echo "<tr><td>" . $rows['id_plante']. "</td><td>".$rows['espece']."</td><td>" .$rows['environnement']."</td><td>" .$rows['prix']."</td><td>" .$rows['origine']
                ."</td><td>" ."<img src='",$image,"' width='175' height='200' />"."</td><td>"."<a href=edit_plantes.php?id=".$rows['id_plante'].">Edit</a>"
                ."</td><td>"."<a href=delete_plante.php?id=".$rows['id_plante'].">Delete</a>"."</td></tr>";

        }
            echo("</table>");
        }




        public function addplante($plante) {

            $sql="insert into plantes(espece,environnement,prix,origine,image) values (:espece , :environnement , :prix , :origine , :image)";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([


                    'espece' => $plante->getespece(),
                    'environnement' => $plante->getenvironnement(),
                    'prix' => $plante->getprix(),
                    'origine' => $plante->getorigine(),
                    'image' => $plante->getimage()

				]);

    	}

        public function deleteplante($id) {
    		$sql='delete from plantes where id_plante= :id';
    		$db=config::getConnexion();
    		$query=$db->prepare($sql);
    		$query->execute([
				'id' => $id]);
        }

        public function updateplante($plante,$id) {
            $sql='update plantes SET

                                espece = :espece,
                                environnement = :environnement,
                                prix = :prix,
                                origine = :origine,
                                image = :image
                            WHERE `plantes`.`id_plante` = :id ;';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                'espece' => $plante->getespece(),
                'environnement' => $plante->getenvironnement(),
                'prix' => $plante->getprix(),
                'origine' => $plante->getorigine(),
                'image' => $plante->getimage(),
                            'id' => $id
                        ]);
            }

    }
?>
