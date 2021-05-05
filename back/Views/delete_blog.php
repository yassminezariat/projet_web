<?php
    include_once '..\controller\blogC.php';

 $planteC = new blogC();
 if (isset($_GET['id'])) // get id through query string
 {
$id = $_GET['id'];
$planteC->deleteblog($id);
header("location:gestion_blog.php"); // redirects to all records page
 }
 else
{
    echo "Error deleting record"; // display error message if not delete
}


?>
