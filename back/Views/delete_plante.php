<?php
    include_once '..\controller\plantesC.php';

 $planteC = new planteC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id'];
$planteC->deleteplante($id);
header("location:gestion_plantes.php"); // redirects to all records page
 }
 else
{
    echo "Error deleting record"; // display error message if not delete
}


?>
