<?php
    include_once '..\controller\animalC.php';

 $animalC = new animalC();
 if (isset($_GET['ida'])) // get id through query string
 {
$id = $_GET['ida'];
$animalC->deleteanimal($id);
header("location:animaux.php"); // redirects to all records page
 }
 else
{
    echo "Error deleting record"; // display error message if not delete
}


?>
