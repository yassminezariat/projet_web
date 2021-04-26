

<?php
    include_once '../Model/avis.php';
    include_once '../Controller/avisC.php';

    // create an instance of the controller
    $avisC = new avisC();
     $avisC->afficheravis();
?>
<html>
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
</html>
