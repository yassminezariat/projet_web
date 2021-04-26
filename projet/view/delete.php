
  <?php
  include_once '../Model/avis.php';
  include_once '../Controller/avisC.php';

   $avisC = new avisC();
   if (isset($_GET['id_avis'])) // get id through query string
   {
  $id_avis = $_GET['id_avis'];
  $avisC->spprimeravis($id_avis);
  //aficher apres la supression
  header("location:showavis.php"); // redirects to all records page
   }
   else
  {
      echo "Error deleting record"; // display error message if not delete
  }

  ?>
<!DOCTYPE HTML>
<html>



 <form action="" method="get">
  <input type="number" name="id_avis"  id="id_avis">
  <input  type="submit" value="Submit" >
</form>
</html>
