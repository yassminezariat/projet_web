<?php

  include_once '../Model/avis.php';
  include_once '../Controller/avisC.php';

  $error = "";
  $success = 0;
  // create user
  $avis= null;

  // create an instance of the controller
  $avisC = new avisC();

  if (isset($_POST["description"])&& isset($_POST["note"]) && isset($_POST["date_avis"]))
       {

      $avis = new Avis(
          $_POST['description'],
          (int)$_POST['note'],
          $newDate = date("Y-m-d", strtotime($_POST['date_avis'])) );
      $avisC->ajouteravis($avis);
      $success = 1;


  }
  else{
      $error = "Missing information" ;
      echo $_POST["description"];
      echo $_POST["note"];
      echo $_POST["date_avis"];
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <div id="cc-m-9532223384" class="j-module n j-header "><h1 class="" id="cc-m-header-9532223384">Partagez votre experience pour que je puisse ameliorer mes services !</h1></div>
  <div id="cc-m-9532223484" class="j-module n j-header "><h3 class="" id="cc-m-header-9532223484">Merci de remplir ce formulaire :</h3></div>
</head>

<body >
  <div id="error">
      <?php echo $error; ?>
  </div>
  <div>

      <br>
  </div>
    <form action="" method="post" >
      <div class="cc-m-form-loading"></div>


        <br></br>
        <div class="cc-m-form-view-input-wrapper">
          <label >
              <div>Id_avis</div>
          </label>
                    <input type="number" name="id_avis"  id="id_avis">
        </div>
        <br></br>
<div>
  <label >
      <div>Email*</div>
  </label>
  <input type="email" name="email" id="email" >

</div>
      <br></br>

        <div class="cc-m-form-view-element cc-m-form-textarea cc-m-required" data-action="element">
            <label for="m7de7648a398c429f3">
                <div>Message</div>
                </label>
            <div class="cc-m-form-view-input-wrapper">
                        <input type="text" name="description"  id="description">
            </div>
        </div>    </div>
        <br></br>
  <div class="cc-m-form-view-element cc-m-form-checkgroup cc-m-required" data-action="element">
      <label for="m7de7648a398c429f0">
          <div>Note sur 5 </div>
          </label>
      <div class="cc-m-form-view-input-wrapper">
                  <div class="cc-m-form-element-input cc-m-form-checkable-horizontal">
      <div>
          <label>
              <input type="number" name="note"  id="note">
              <span>1</span>
          </label>
      </div>

  </div>

      </div>
  </div>

  <br><br>

  <div class="cc-m-form-view-element cc-m-form-email " data-action="element">
      <label for="m7de7648a398c429f2">
          <div>date</div>
          </label>
      <div class="cc-m-form-view-input-wrapper">
                  <input type="date"  name="date_avis"  id="date_avis">
      </div>
  </div>
  <br><br>


  <br><br>

  <div class="cc-m-form-view-element cc-m-form-submit" data-action="element">
      <label></label>
      <div class="cc-m-form-view-input-wrapper">
        <input  type="submit" value="Submit" >

      </div>
  </div>
  <br><br>
  <button id="bt" class="float-left sumbit-button">Cancel</button>
              <script>
                  document.getElementById("bt").onclick = function () { location.href = "showavis.php"; };
              </script>

      <p class="cc-m-form-note">
          <strong>Note :</strong>
          veuillez remplir les champs marques d'un <span class="j-m-required">*</span>.    </p>


    </form>

    <form  method="get">
      <h3>SUPPRIMER </h3>
      <input type="number" name="id_avis"  id="id_avis">
     <input  type="submit" value="supprimer" >
     <?php
      $avisC = new avisC();
      $id_avis = $_GET['id_avis'];
     $avisC->spprimeravis($id_avis);

     ?>
    </form>
      <section  id="affichage">
                    <div class="grid-form1">
                    <table>
                        <tr>
                            <th>id_avis</th>
                            <th>description</th>
                            <th>note</th>
                            <th>date_avis</th>


                        </tr>

                        <?php $avisC = new avisC();
                            $avisC->afficheravis();
                        ?>
                    </div>

                </section>

                <br></br>
                <br></br>




</html>
