<?php
    include_once '..\controller\produitC.php';

 $produitC = new produitC();
 if (isset($_GET['ida'])) // get id through query string
 {
$id = $_GET['ida'];
$produitC->deleteproduit($id);
header("location:gestion_produits.php"); // redirects to all records page
 }
 else
{
    echo "Error deleting record"; // display error message if not delete
}


?>
