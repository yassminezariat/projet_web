
<?php
include "../model/eve.php";
include "../controller/eveC.php";
try
{
	// On se connecte à MySQL
	//$bdd = new PDO('mysql:host=localhost;dbname= even ;charset=utf8', 'root', '');

    $sql="SELECT * From even";
    $db=config::getConnexion();
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $db->query('SELECT * FROM even');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    
    <?php echo $donnees['id_eve']; ?>
    <br />
   
    <?php echo $donnees['date_eve']; ?>
    <br/>
    <?php echo $donnees['type_eve']; ?> 
   <br />
   </em>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
 <!-- <html>
<head>
<title> page des evenement </title>
<link rel="stylesheet"
	href="../resources/assets/plugins/bootstrap/css/bootstrap.min.css" />
	
	<link rel="stylesheet" href="../resources/assets/css/main.css"/>
<link rel="stylesheet" href="../resources/assets/css/theme2.css"/>
 </head>
<body class="font-monstserrat">
<div class="section-body mt-3">
<div class="contrainer-fluid">
<div class="row">
<div class="col-md-6 col-lg-4">
<div class="card">
<div class="card-header">
<h1 class="card-title">welcom to event page</h1>
</div>
<div class="card-body">
<div class="from-group">
<form action="" method="post">
<label class="form-label">Identifiant:</label>
<input class="form-control" type="text" name="titre">
<br>
<label class="from-label"> date d'evenement:</label>
<input class="form-control" type="date" id="bday" name="bday">
<br>
<label class="form-label"> type des evenement:</label>
<select name="type des evenement">
<option value="co">conference</option>
<option value="con">congrés</option>
<option value="se">seminaire</option>
<option value="sa">salon de peofession</option>
<option value="te">team building</option>
</select>
<br>
<input  type="submit" value="Submit" >
<br>
<input  type="cancel" value="cancel" >
</form>

</div>                             
</div>
</div>
</div>
</div>
</div>
</div>                               
</body>
</html>-->

<?php
//if (isset($_POST['id_eve'])&&isset($_POST['date_eve'])&&isset($_POST['type_eve']))
{
    if (!empty($_Post['id_eve'])&& !empty($_POST['date_eve'])&& !empty($_POST['type_eve']))
    {
        $evenement= new evenement($_POST['id_eve'] , $_POST['date_eve'],$_POST['type_eve']);
        $evenementC= new evenementC();
        $evenementC->ajoutereve($evenementC);
        $evenementC=new evenementC();
        $liste=$evenementC->affichereve();
        header('location:affichereve.php');
    }
}//
?>







