<?php
    include_once '../Model/Employe.php';
    include_once "..\controller\EmployeC.php";

    $error = "";

    // create user
    $Employe = null;

  // create an instance of the controller
    $EmployeC = new employeC();
    if (
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["email"]) &&
        isset($_POST["age"]) &&
        isset($_POST["numero"]) &&
        isset($_POST["login"])
    ) {
        if (
            !empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["email"]) &&
            !empty($_POST["age"]) &&
            !empty($_POST["numero"]) &&
            !empty($_POST["login"])
        ) {
            $Employe = new employe(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['email'],
                $_POST['age'],
                $_POST['numero'],
                $_POST['login']
            );
            $EmployeC->ajouteremploye($Employe);
            header('Location:AfficherEmpl.php');
        }
        else
            $error = "Missing information";
    }


?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Ajout d'un employe </title>
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

                    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Ajouter un Employee</h2>
              </div>
            </div>
            <div id="error">
            <?php echo $error; ?>
        </div>

            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
              <form action="" method="POST">
                  <div class="form-group mb-3">
                    <label
                      for="nom"
                      > Name
                    </label>
                    <input
                      id="nom"
                      name="nom"
                      type="text"
                      pattern="[A-Z a-z]*"
                      class="form-control validate"
                      required
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="prenom"
                      >Prenom</label
                    >
                    <textarea id="prenom"
                    name="prenom"
                    type="text"
                     class="form-control validate"
                     pattern="[A-Z a-z]*"
                      required
                    ></textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="email"
                      >Email</label
                    >
                    <textarea id="email"
                    name="email"
                      class="form-control validate"
                      rows="3"
                      required
                    ></textarea>
                  </div>

                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="age"
                            >Age
                          </label>
                          <input
                            id="age"
                            name="age"
                            type="number"
                            min="20"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>

                  </div>

                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="numero"
                            >Numero
                          </label>
                          <input
                            id="numero"
                            name="numero"
                            type="number"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>

                  </div>


                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="login"
                            >Login
                          </label>
                          <input
                            id="login"
                            name="login"
                            type="number"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>

                  </div>

              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Ajouter Employe</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                <div class="copyrights">
                    <p>© 2021 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
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


                    <li id="menu-academico"><a href="inbox.html"><i class="fa fa-envelope nav_icon"></i><span>Inbox</span>
                            <div class="clearfix"></div>
                        </a></li>
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
    </script>
    <!--js -->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- /Bootstrap Core JavaScript -->

</body>

</html>
