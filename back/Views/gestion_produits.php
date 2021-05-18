
<?php
include_once "..\Model\produits.php";
include_once "..\Controller\produitC.php";

$error = "";
$success = 0;
// create user
$produit= null;
$produitC = new produitC();




if (isset($_POST["prix"]) && isset($_POST["type"])&& isset($_POST["appartenance"])&& isset($_POST["description"])&& isset($_POST["image"]))
    {//{if (empty($_POST["nom"])&& empty($_POST["prenom"]) && empty($_POST["dateNais"]) && empty($_POST["email"]) && empty($_POST["tel"]) && empty($_POST["adresse"]) && empty($_POST["login"]) && empty($_POST["pass"])) {

    $produit = new produit(

        (int)$_POST['prix'],
        $_POST['type'],
        $_POST['appartenance'],
        $_POST['description'],
        (string)$_POST['image']

    );
    $produitC->addproduit($produit);
    $success = 1;
    header("location: gestion_produits.php");

//}
}


?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Input :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

#customers th.headerSortUp{
   background-image:url("../images/up.png") ;
   background-color: #3399FF;
   background-repeat:no-repeat;
   background-position: center right;


 }
 #customers th.headerSortDown{
   background-image:url("../images/down.png") ;
   background-color: #3399FF;

   background-repeat:no-repeat;
   background-position: center right;


 }

</style>
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
    <script src="..\js/Chart.js"></script>
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

    <script src="..\sort.js"></script>

</head>

<body>
    <script src="..\controle_de_saisie_produits.js"></script>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->
                <div class="header-main">
                    <div class="logo-w3-agile">
                        <h1><a href="index.html">Pooled</a></h1>
                    </div>
                    <div class="w3layouts-left">

                        <!--search-box-->
                        <div class="w3-search-box">
                            <form action="#" method="post">
                                <input type="text" placeholder="Search..." required="">
                                <input type="submit" value="">
                            </form>
                        </div>
                        <!--//end-search-box-->
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3layouts-right">
                        <div class="profile_details_left">
                            <!--notifications of menu start -->
                            <ul class="nofitications-dropdown">
                                <li class="dropdown head-dpdn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new messages</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/in11.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/in10.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/in9.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all messages</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown head-dpdn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new notification</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/in8.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/in6.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/in7.jpg" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all notifications</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown head-dpdn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 8 pending task</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar yellow" style="width:40%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar green" style="width:90%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar red" style="width: 33%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar  blue" style="width: 80%;"></div>
                                                </div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all pending tasks</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <div class="clearfix"> </div>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <!--notification menu end -->

                        <div class="clearfix"> </div>
                    </div>
                    <div class="profile_details w3l">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src="images/in4.jpg" alt=""> </span>
                                        <div class="user-name">
                                            <p>Malorum</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class="fa fa-angle-down"></i>
                                        <i class="fa fa-angle-up"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                    <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <!--heder end here-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Gestion des plantes</li>
                </ol>
                <!--grid-->
                <section id="ajout">
                  <div class="grid-form">
                      <div class="grid-form1">
                          <h2 id="forms-example" class="">Ajouter un produit</h2>
                          <form action="" method="POST" onSubmit="return controlersaisie();">

                            <div id="div_prix" class="form-group">
                                <label for="exampleInputPassword1">Prix</label>
                                <input type="text" class="form-control1" name="prix" id="prix" placeholder="prix">
                                <div  role="alert" id="err_prix" ></div>
                            </div>
                            <div id="div_type" class="form-group">
                                <label for="exampleInputPassword1">Type</label>
                                <input type="text" class="form-control1" name="type" id="type" placeholder="type" >
                                <div  role="alert" id="err_type" ></div>
                            </div>
                            <div id="div_appartenance" class="form-group">
                                <label for="exampleInputPassword1">Appartenance</label>
                                <input type="text" class="form-control1" name="appartenance" id="appartenance" placeholder="appartenance">
                                <div  role="alert" id="err_appartenance" ></div>
                            </div>
                            <div id="div_description" class="form-group">
                                <label for="exampleInputPassword1">description</label>
                                <input type="text" class="form-control1" name="description" id="description" placeholder="description">
                                <div  role="alert" id="err_description" ></div>
                            </div>
                            <div id="div_image" class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input type="file" class="form-control1" name="image" id="image">
                                <div  role="alert" id="err_image" ></div>
                            </div>


                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <input class="btn-primary btn" type="submit" value="Submit">
                                        <button class="btn-default btn">Cancel</button>
                                        <button class="btn-inverse btn">Reset</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!----->

                        <div class="bs-example" data-example-id="form-validation-states-with-icons">
                            <form>


                                <span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                        </div>


                        </form>
                    </div>
                </div>
                </section>
                <!--//grid-->
                <script>

                $(document).ready(function() {
                  $('#customers').tablesorter();

                });



                </script>

                <section  id="affichage">
                    <div class="agile-tables">
                    <div class="w3l-table-info">
                        <h2 id="forms-example" class="">La liste des produits</h2>
                        <button onclick="PPDDFF()" class="btn btn-xs btn-primary btn-block"> Export to PDF</button>

                          <input type="text" name="search_produit" id="search_produit" class="form-control" placeholder="Rercher"/>
                    <table id ="customers">
                      <thead class ="thead-inverse">
                        <tr>
                            <th>id_produit</th>

                            <th>Prix(dts)</th>
                            <th>type</th>
                            <th>appartenance</th>
                            <th>description</th>
                            <th>image</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                            </thead>

                        </tr>

                        <?php $produitC = new produitC();
                            $produitC->afficherproduit();
                        ?>
                    </div>


                </section>
                <script>
              function PPDDFF() {
                const element = document.getElementById("customers");
                html2pdf()
                .from(element)
                .save();


              }
              </script>
                <script>
                  $(document).ready(function() {
                    $('#search_produit').keyup(function() {
                      search_table($(this).val());
                    });

                    function search_table(value) {
                      $('#customers tr').each(function() {
                        var found = 'false';
                        $(this).each(function() {
                          if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                            found = 'true';
                          }
                        });
                        if (found == 'true') {
                          $(this).show();
                        } else {
                          $(this).hide();
                        }
                      });
                    }
                  });
                </script>
                <!-- final affichage des plantes -->
                <div class="charts">
                  <div class="col-md-4 w3layouts-char">
						<div class="charts-grids widget"id="pdf2">
							<h4 class="title">Bar Chart Example</h4>
              <button onclick="PPDDFF2()" class="btn btn-xs btn-primary btn-block"> Export as PDF</button>
							<canvas id="bar" width="680" height="600" style="width: 544px; height: 480px;"> </canvas>
						</div>
					</div>
                    <div class="col-md-4 w3l-char">
						<div class="charts-grids widget" id="pdf">
							<h4 class="title">Stat des type des produits</h4>
              <button onclick="PPDDFF()" class="btn btn-xs btn-primary btn-block"> Export as PDF</button>
							<canvas id="pie" width="922" height="813" style="width: 738px; height: 651px;"> </canvas>
						</div>
					</div>

                    <?php
                    $pdo=config::getConnexion();
                    $query= $pdo ->prepare("select count(type)as nombre,type from produits GROUP by type");

                    $query->execute();
                     $stat = $query->fetchAll();

                     $query= $pdo ->prepare("select count(appartenance)as nombre,appartenance from produits GROUP by appartenance");
                     $query->execute();
                      $bar = $query->fetchAll();
                      (string)$lables="[";
                      (string)$valuess='[';

                      foreach($bar as $choix) {
                      $lables .= "'".$choix['appartenance']."'".",";
                      $valuess.="'".(int)$choix['nombre']."'".",";



                      }
                        $lables.=']';
                        $valuess.=']';



                    ?>


                    <script>
                    var barChartData = {
									<?php echo "labels :".$lables.",";?>
									datasets : [
										{
											<?php echo "fillColor :'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                      echo "strokeColor :'rgba(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
											 ?>
											highlightFill: "#e74c3c",
											highlightStroke: "#e74c3c",
											<?php echo "data :".$valuess.",";?>
										},

									]

								};

								var pieData = [
                                    <?php

                                    foreach($stat as $count) {


                                        echo "{value:".$count['nombre'].",";
                                        echo "color:'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                                        echo "label: '",$count['type'], "'},";



                                    }
                                            ?>



									];


                new  Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

							</script>
            </script>
            <script>
            function PPDDFF() {
              const element = document.getElementById("pdf");
              html2pdf()
              .from(element)
              .save();


            }
            </script>
            <script>
            function PPDDFF2() {
              const element = document.getElementById("pdf2");
              html2pdf()
              .from(element)
              .save();


            }
            </script>





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


                        <li id="menu-academico"><a href="gestion_plantes.php"><i class="fa fa-envelope nav_icon"></i><span>Gestion</span>
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




                            </ul>
                        </li>
                    <li><a href="gallery.html"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Gallery</span>
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
