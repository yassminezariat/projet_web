
<?php

include "../model/eve.php";
include "../controller/eveC.php";

$error = "";
$success = 0;
// create user
$evenement= null;

// create an instance of the controller
$evenementC = new evenementC();

if (isset($_POST["id_eve"])&& isset($_POST["date_eve"])&& isset($_POST["type_eve"]) )
     {

    $evenement = new evenement(
        (int)$_POST['id_eve'],
        
        $newDate = date("Y-m-d", strtotime($_POST['date_eve'])),
        (string)$_POST['type_eve'] );
        $evenementC->ajoutereve($evenement);
        $success = 1;


}
else{
    $error = "Missing information" ;
}
?>




<html>
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
<input class="form-control" type="text" name="id_eve">
<br>
<label class="from-label"> date d'evenement:</label>
<input class="form-control" type="date" id="bday" name="date_eve">
<br>
<label class="form-label"> type des evenement:</label>
<select name="type_eve">
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
</html>