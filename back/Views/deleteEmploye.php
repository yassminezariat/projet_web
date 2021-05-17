<?PHP
	include "../Controller/EmployeC.php";

	$EmployeC=new employeC();

	if (isset($_POST["idE"])){
		$EmployeC->deleteemploye($_POST["idE"]);
		header('Location:AfficherEmpl.php');
	}

?>
