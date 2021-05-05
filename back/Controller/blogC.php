<?php
include_once "../connection.php" ;
class blogC{


    public function afficherblog() {
        try{
            $pdo=config::getConnexion();
            $query= $pdo ->prepare(
                'SELECT * FROM blog'
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
            echo "<tr><td>" . $rows['id']. "</td><td>" . $rows['titre'] . "</td><td>". $rows['sujet']. "</td><td>"
            .$rows['article']."</td><td>" ."<img src='",$image,"' width='175' height='200' />"."</td><td>"."<a href=edit_blog.php?id=".$rows['id']."><img src=../images/pencil.png width=35 height=35></a>"
            ."</td><td>"."<a href=..\Views\delete_blog.php?id=".$rows['id']."><img src=../images/button_cancel.png width=35 height=35></a>"."</td></tr>";

    }
        echo("</table>");
    }
    public function ajouterblog($blog) {

    $sql="insert into blog (titre,sujet,article,image) values(:titre,:sujet,:article,:image)";
    $db=config::getConnexion();
    try {
    $query=$db->prepare($sql);
    $query->execute([
					           'titre' => $blog->gettitre (),
                     'sujet' => $blog->getsujet (),
                    'article' => $blog->getarticle(),
                    'image' => $blog->getimage(),
                ]); }
                catch (PDOException $e) {
                    $e->getMessage();
                }
        }
        public function getAlbumById($id) {
            try {
                $pdo =config::getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM blog WHERE id = :id'
                );
                $query->execute([
                    'id' => $id
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function updateAlbum($blog, $id) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE blog SET
                            titre = :titre,
                            article = :prearticlenom,
                            image = :image,
                        WHERE id = :id'
                );
                $query->execute([
                    'titre' => $blog->gettitre(),
                    'article' => $blog->getarticle(),
                    'image' => $blog->getimage(),
                    'id' => $id
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function modifierblog($titre,$sujet,$article,$image,$id) {
            $sql="update blog SET
                                titre = :titre,
                                sujet = :sujet,
                                article = :article,
                                image = :image
                            WHERE id = :id";
            $db=config::getConnexion();
            $query=$db->prepare($sql);
            $query->execute([
                            'titre' => $titre,
                            'sujet' => $sujet,
                            'article' => $article,
                            'image' => $image,
                            'id' => $id,
                        ]);
            }
        public function deleteblog($id)
{
    $sql="delete from blog where id = :id";
    $db=config::getConnexion();
    $query=$db->prepare($sql);
    $query->execute(['id' => $id]);
}    }
        ?>
