<?php

class blogC{

  public function afficherblogg() {
      try{
          $result=NULL;
          $pdo=config::getConnexion();
          $query= $pdo ->prepare(
              'SELECT * FROM blog'
          );
          $query->execute();
          return $query->fetchAll();
      }
      catch(PDOException $e){
          $e->getMessage();
      }
  }

    public function afficherblog($result) {
        $i=0;


        foreach($result as $rows)
        {$image=$rows['image'];
        $image="..\back\images\\$image";

        if ($i==1){$i++;}





          echo "<div class='col-lg-4 col-md-6 mt-sm-0 mt-4'>";
              echo               "  <div class='card'>";
                        echo        "  <div class='card-header p-0 position-relative'>";
              echo  "<a href='#exampleModal",$i,"' data-toggle='modal' aria-pressed='false' data-target='#exampleModal",$i,"' role='button'>";
                                        echo  "<img class='card-img-bottom' src='",$image,"' alt='Card image cap'>";
                                        echo " <span class='fa fa-user post-icon bg-theme' aria-hidden='true' data-blast='bgColor'></span>";

                                  echo  "  </a></div>";
                                echo " <div class='card-body'>";
                                    echo  "<h5 class='blog-title card-title font-weight-bold'>";
                          echo " <a href='##exampleModal",$i,"' data-toggle='modal' aria-pressed='false' data-target='##exampleModal",$i,"' role='button'>",$rows['titre'],"</a>";
                                    echo   "</h5>" ;
                                    echo  "<p>",$rows['article'],".</p>";
                                    echo  "<label class='mt-2'> <span class='fa fa-calendar mr-3'></span>08.10.2018</label>";
                                    echo  "<button type='button' class='btn blog-btn wthree-bnr-btn' data-toggle='modal' aria-pressed='false' data-target='#exampleModal",$i,"'>";
                                    echo      "Read more" ;
                                  echo    "</button>";
                              echo    "</div>";
                            echo  "</div>";
                        echo  "</div>";


                        $i++;







    }

    }
    public function affficherevent($result) {
        $i=0;


        foreach($result as $rows)
        {$image=$rows['image'];
        $image="..\back\images\\$image";

        if ($i==1){$i++;}





          echo "<div class='col-lg-4 col-md-6 mt-sm-0 mt-4'>";
              echo               "  <div class='card'>";
                        echo        "  <div class='card-header p-0 position-relative'>";
              echo  "<a href='#exampleModal",$i,"' data-toggle='modal' aria-pressed='false' data-target='#exampleModal",$i,"' role='button'>";
                                        echo  "<img class='card-img-bottom' src='",$image,"' alt='Card image cap'>";
                                        echo " <span class='fa fa-user post-icon bg-theme' aria-hidden='true' data-blast='bgColor'></span>";

                                  echo  "  </a></div>";
                                echo " <div class='card-body'>";
                                    echo  "<h5 class='blog-title card-title font-weight-bold'>";
                          echo " <a href='##exampleModal",$i,"' data-toggle='modal' aria-pressed='false' data-target='##exampleModal",$i,"' role='button'>",$rows['Nom'],"(",$rows['type'],")</a>";
                                    echo   "</h5>" ;
                                    echo  "<p>",$rows['description'],".</p>";
                                    echo  "<label class='mt-2'> <span class='fa fa-calendar mr-3'></span>",$rows['date'],"</label>";
                                    echo  "<button type='button' class='btn blog-btn wthree-bnr-btn' data-toggle='modal' aria-pressed='false' data-target='#exampleModal",$i,"'>";
                                    echo      "Read more" ;
                                  echo    "</button>";
                              echo    "</div>";
                            echo  "</div>";
                        echo  "</div>";


                        $i++;







    }

    }




    public function afficherblog2($result) {
        $i=0;


        foreach($result as $rows)
        {$image=$rows['image'];
        $image="..\back\images\\$image";


        if ($i==1){$i++;}





      echo  "<div class='modal fade' id='exampleModal",$i,"' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel",$i,"' aria-hidden='true'>";
        echo    "<div class='modal-dialog modal-dialog-centered' role='document'>";
            echo    "<div class='modal-content'>";
              echo      "<div class='modal-header bg-theme'>";
              echo          "<h5 class='modal-title' id='exampleModalLabel3'>",$rows['titre'],"</h5>";
              echo          "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                echo            "<span aria-hidden='true'>&times;</span>";
                echo        "</button>";
                echo    "</div>";
                echo    "<div class='modal-body text-center'>";
                echo        "<img src='",$image,"' class='img-fluid' alt='' />";
                echo      "  <p class='text-left my-4'>",$rows['article']," </p>";
                echo  "<li> <a href='gestion_blog_commentaire.php'> comment</a></li>";


                echo   " </div>";
            echo    "</div>";
          echo  "</div>";
    echo   " </div>";





    $i++;


    }

    }




    public function afficherevent2($result) {
        $i=0;


        foreach($result as $rows)
        {$image=$rows['image'];
        $image="..\back\images\\$image";


        if ($i==1){$i++;}





      echo  "<div class='modal fade' id='exampleModal",$i,"' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel",$i,"' aria-hidden='true'>";
        echo    "<div class='modal-dialog modal-dialog-centered' role='document'>";
            echo    "<div class='modal-content'>";
              echo      "<div class='modal-header bg-theme'>";
              echo          "<h5 class='modal-title' id='exampleModalLabel3'>",$rows['Nom'],"</h5>";
              echo          "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                echo            "<span aria-hidden='true'>&times;</span>";
                echo        "</button>";
                echo    "</div>";
                echo    "<div class='modal-body text-center'>";
                echo        "<img src='",$image,"' class='img-fluid' alt='' />";
                echo      "  <p class='text-left my-4'>",$rows['description']," </p>";
                echo  "<li> <a href='gestion_blog_commentaire.php'> comment</a></li>";


                echo   " </div>";
            echo    "</div>";
          echo  "</div>";
    echo   " </div>";





    $i++;


    }

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
