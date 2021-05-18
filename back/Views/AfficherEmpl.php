<?PHP

	include_once "..\controller\EmployeC.php";

	$EmployeC=new employeC();
	$listeEmploye=$EmployeC->displayemploye();

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Ajout un client </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
		<!-- Bootstrap Core CSS -->
		<link href="..\css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="..\css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/morris.css" type="text/css" />
		<!-- Graph CSS -->
		<link href="..\css/font-awesome.css" rel="stylesheet">
		<!-- jQuery -->
		<script src="js/jquery-2.1.4.min.js"></script>
		<!-- //jQuery -->
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- lined-icons -->
		<link rel="stylesheet" href="..\css/icon-font.min.css" type='text/css' />
		<!-- //lined-icons -->
</head>

<body>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->
                <div class="header-main">
                    <div class="logo-w3-agile">
                        <h1><a href="index.html">Pooled</a></h1>
                    </div>




                        <div class="clearfix"> </div>
                    </div>

                    <div class="w3layouts-right">
                        <div class="profile_details_left">

                        <div class="clearfix"> </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <!--heder end here-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Forms <i class="fa fa-angle-right"></i> Employees</li>
                </ol>
                <!--grid-->
                <div class="grid-form">
                    <div class="grid-form1">
                   <!--     <h2 id="forms-example" class="">Basic Form</h2>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>-->
                    <!----->
                    <div class="grid-form1">
                        <h3 id="forms-horizontal">Gestion Employes </h3>
                        <form class="form-horizontal">
                           <!-- <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label hor-form">Nom</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" placeholder="Nom">
                                </div>
                            </div>
							 <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label hor-form">Prénom</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom">
                                </div>
                            </div>
							 <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label hor-form">age</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputage" placeholder="age">
                                </div>
                            </div>
							  <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label hor-form">email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputemail" placeholder="nomprenom@">
                                </div>
                            </div>

							 <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label hor-form">Numero</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNumero" placeholder="numero Tel">
                                </div>
                            </div>
								 <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label hor-form">Role</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputrole" placeholder="Role">
                                </div>
                            </div>
                        -->



                 <!--         <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-4">
                                    <a
                                    href="addClient.php"
                                    class="btn btn-primary btn-block text-uppercase mb-3">Ajouter Client</a>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-4">
                                    <a
                                    href="modifyClient.php"
                                    class="btn btn-primary btn-block text-uppercase mb-3">Modifier Client</a>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-4">
                                    <a
                                    href="deleteClient.php"
                                    class="btn btn-primary btn-block text-uppercase mb-3">Supprimer Client</a>

                                </div>
                            </div>

    -->  <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>

                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PRENOM</IMg></th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">AGE</th>
                    <th scope="col">NUMERO</th>
                    <th scope="col">LOGIN</th>

                    <th scope="col">&nbsp;</th>
                  </tr>
                  <tr></tr>
                </thead>
             <tbody>

             	<?PHP
				foreach($listeEmploye as $Employe){
			?>
			<tr>
      <td></td>
                    <td><?PHP echo $Employe['idE']; ?></td>
                    <td><?PHP echo $Employe['nom']; ?></td>
                    <td><?PHP echo $Employe['prenom']; ?></td>
					<td><?PHP echo $Employe['email']; ?></td>
                    <td><?PHP echo $Employe['age']; ?></td>
                    <td><?PHP echo $Employe['numero']; ?></td>
                    <td><?PHP echo $Employe['login']; ?></td>
					<td></td>
					<td>

            <!-- <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
             </a>-->

						<form method="POST" action="deleteEmploye.php">
						<input type="submit" name="DELETE" value="DELETE" class="btn btn-primary btn-block text-uppercase">
						<input type="hidden" value=<?PHP echo $Employe['idE']; ?> name="idE"  >
						</form> 					</td>
				      	<td>
                        <a href="modifyEmploye.php? idE=<?PHP echo $Employe['idE']; ?>" class="btn btn-primary btn-block text-uppercase"> modify </a>

				      	</td>
			         	</tr>
		            	<?PHP
				}
			?>


                        </form>
                    </div>

                    </tbody>
              </table>
            </div>
            <!-- table container -->
          <a
              href="ajouterEmpl.php"
              class="btn btn-primary btn-block text-uppercase mb-3"> Add employe </a>

          </div>
          <a
              href="mailer.php"
              class="btn btn-primary btn-block text-uppercase mb-3"> Envoyer un mail </a>

          </div>
        </div>
                    <!---->

                    <!---->



                    <!---->

                <!--//grid-->

                <!-- script-for sticky-nav -->
                <script>
                    $(document).ready(function() {
                        var navoffeset = $(".header-main").offset().top;
                        $(window).scroll(function() {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-main").addClass("fixed");
                            } else {
                                $(".header-main").removeClass("fixed");
                            }
                        });

                    });
                </script>
                <!-- /script-for sticky-nav -->
                <!--inner block start here-->
                <div class="inner-block">

                </div>
                <!--inner block end here-->
                <!--copy rights start here-->

                <!--COPY rights end here-->
            </div>
        </div>
        <!--//content-inner-->
        <!--/sidebar-menu-->
        <div class="sidebar-menu">
            <header class="logo1">
                <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
            </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
                <ul id="menu">
                    <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span>
                            <div class="clearfix"></div>
                        </a></li>


                    <li id="menu-academico"><a href="inbox.html"><i class="fa fa-envelope nav_icon"></i><span>Gestion</span>
                            <div class="clearfix"></div>
                        </a>
												<ul id="menu-academico-sub">
	                                <li><a href="gestion_plantes.php">gestion des plantes</a></li>
	                                <li><a href="animaux.php">gestion des animaux</a></li>
	                                <li><a href="gestion_produits.php">gestion des produits</a></li>
	                                <li><a href="gestion_blog.php">gestion des blogs</a></li>
	                                <li><a href="gestion_avis.php">gestion des avis et des reclamations</a></li>
	                                <li><a href="gestion_event.php">gestion des evennements</a></li>
	                                <li><a href="sponsors.php">gestion des sponsors</a></li>
	                                <li><a href="Afficherclient.php">gestion des clients</a></li>
	                                <li><a href="AfficherEmpl.php">gestion des employes</a></li>




	                            </ul></li>
                    <li><a href="gallery.html"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span>
                            <div class="clearfix"></div>
                        </a></li>
						<li  class="nav-link active" id="menu-academico"><a href="AfficherEmpl.php"><i class="fa fa-envelope nav_icon"> </i><span>Employee</span>
                            <div class="clearfix"></div>
                        </a></li>
                    <li id="menu-academico"><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span>
                            <div class="clearfix"></div>
                        </a></li>
                    <li id="menu-academico"><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Short Codes</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="icons.html">Icons</a></li>
                            <li id="menu-academico-avaliacoes"><a href="typography.html">Typography</a></li>
                            <li id="menu-academico-avaliacoes"><a href="faq.html">Faq</a></li>
                        </ul>
                    </li>
                    <li id="menu-academico"><a href="errorpage.html"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Error Page</span>
                            <div class="clearfix"></div>
                        </a></li>
                    <li id="menu-academico"><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span> UI Components</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-avaliacoes"><a href="button.html">Buttons</a></li>
                            <li id="menu-academico-avaliacoes"><a href="grid.html">Grids</a></li>
                        </ul>
                    </li>
                    <li><a href="tabels.html"><i class="fa fa-table"></i> <span>Tables</span>
                            <div class="clearfix"></div>
                        </a></li>
                    <li><a href="maps.html"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Maps</span>
                            <div class="clearfix"></div>
                        </a></li>
                    <li id="menu-academico"><a href="#"><i class="fa fa-file-text-o"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="menu-academico-sub">
                            <li id="menu-academico-boletim"><a href="calendar.html">Calendar</a></li>
                            <li id="menu-academico-avaliacoes"><a href="signin.html">Sign In</a></li>
                            <li id="menu-academico-avaliacoes"><a href="signup.html">Sign Up</a></li>


                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span>
                            <div class="clearfix"></div>
                        </a>
                        <ul>
                            <li><a href="input.html"> Input</a></li>
                            <li><a href="validation.html">Validation</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function() {
            if (toggle) {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({
                    "position": "absolute"
                });
            } else {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function() {
                    $("#menu span").css({
                        "position": "relative"
                    });
                }, 400);
            }

            toggle = !toggle;
        });
        <div class="copyrights">
                    <p>© 2021 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
    </script>
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- /Bootstrap Core JavaScript -->

</body>

</html>
