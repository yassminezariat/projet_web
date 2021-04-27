<?php
include_once "../connection.php" ;

    class produitC {
        public function afficherproduit() {
            try{
                $pdo=config::getConnexion();
                $query= $pdo ->prepare(
                    'SELECT * FROM produits'
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
                echo "<tr><td>" . $rows['ID_produit']. "</td><td>" . $rows['prix'] . "</td><td>"
                .$rows['type']."</td><td>" .$rows['appartenance']."</td><td>" .$rows['description']
                ."</td><td>" ."<img src='",$image,"' width='175' height='200' />"."</td><td>"."<a href=edit_produits.php?ida=".$rows['ID_produit']."><img src=../images/pencil.png width=35 height=35></a>"
                ."</td><td>"."<a href=..\Views\delete_produit.php?ida=".$rows['ID_produit']."><img src=../images/button_cancel.png width=35 height=35></a>"."</td></tr>";

        }
            echo("</table>");
        }






        public function addproduit($produit) {

            $sql="insert into produits(prix,type,appartenance,description,image) values ( :prix , :type , :appartenance , :description  , :image)";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([

					'prix' => $produit->getprix(),
                    'type' => $produit->gettype(),
                    'appartenance' => $produit->getappartenance(),
                    'description' => $produit->getdescription(),
                    'image' => $produit->getimage()

				]);

    	}

        public function deleteproduit($id) {
    		$sql='delete from produits where id_produit= :id';
    		$db=config::getConnexion();
    		$query=$db->prepare($sql);
    		$query->execute([
				'id' => $id]);
        }

        public function updateproduit($produit,$id) {
            $sql='update produits SET
                                prix = :prix,
                                type = :type,
                                appartenance = :appartenance,
                                description = :description,
                                image = :image
                            WHERE `produits`.`id_produit` = :id ;';
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                    'prix' => $produit->getprix(),
                    'type' => $produit->gettype(),
                    'appartenance' => $produit->getappartenance(),
                    'description' => $produit->getdescription(),
                    'image' => $produit->getimage(),
                    'id' => $id

				]);
            }

    }
?>
