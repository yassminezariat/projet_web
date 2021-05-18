<?php
include "../controller/EventC.php";

include "../model/Event.php";
$user_id=0;//session



$id = $_GET['id'];
//$animal = new animal();

$animalC = new EventC();
    $pdo=config::getConnexion();
    $query= $pdo ->prepare("select * from event where id= '$id'");
    $query->execute();
     $result = $query->fetchAll();





if(isset($_POST['nom'])&&isset($_POST['type']) && isset($_POST['description']) && isset($_POST['date'])){
    $e=new Event($_POST['nom'],$_POST['date'],$_POST['type'],$_POST['description']);
    $eventc=new EventC();
    $eventc->modifierEvent($e,$id);
    header("location: gestion_event.php");
}








$eventc=new EventC();
$liste=$eventc->afficherEvent();

?>
<!DOCTYPE HTML>
<html>

<head>
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
            <section id="ajout">
              <div class="grid-form">
                  <div class="grid-form1">
                      <h2 id="forms-example" class="">Ajouter un event</h2>
                      <?php foreach($result as $rows) {?>
                      <form action="" method="POST" onSubmit="return controledesaisie()">
                          <div id="div_race" class="form-group">
                              <label for="exampleInputEmail1">Nom</label>
                              <input type="text" class="form-control1"  name="nom" id="nom" value="<?php echo $rows['Nom'] ?>" placeholder="Nom" required>
                              <div  role="alert" id="err_race" ></div>

                          </div>
                          <div id="div_espece" class="form-group">
                              <label for="exampleInputPassword1">Type</label>
                              <input type="text" class="form-control1" name="type" id="type" value="<?php echo $rows['type'] ?>" placeholder="Type" required>
                              <div  role="alert" id="err_espece" ></div>
                          </div>
                          <div id="div_date_naissance" class="form-group">
                              <label for="exampleInputPassword1">Date</label>
                              <input type="date" class="form-control1" name="date" value="<?php echo $rows['date'] ?>"required>
                              <div  role="alert" id="err_date_naissance" ></div>
                          </div>
                          <div id="div_prix" class="form-group">
                              <label for="exampleInputPassword1">Description</label>
                              <textarea onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();" id="msg" name="description" value="<?php echo $rows['description'] ?>" required></textarea>
                              <div  role="alert" id="err_prix" ></div>
                          </div>
                          <?php } ?>
                          <script language="javascript" type="text/javascript">
                              function calculeLongueur(){
                                  var iLongueur, iLongueurRestante;
                                  iLongueur = document.getElementById('msg').value.length;
                                  if (iLongueur>100) {
                                      document.getElementById('msg').value = document.getElementById('msg').value.substring(0,100);
                                      iLongueurRestante = 0;
                                  }
                                  else {
                                      iLongueurRestante = 100 - iLongueur;
                                  }
                                  if (iLongueurRestante <= 1)
                                      document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
                                  else
                                      document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";
                              }
                          </script>



                          <div class="panel-footer">
                              <div class="row">
                                  <div class="col-sm-8 col-sm-offset-2">
                                      <input class="btn-primary btn" type="submit" value="Submit">
                                      <button class="btn-default btn" >Cancel</button>
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
              <script>

              $(document).ready(function() {
                $('#customers').tablesorter();

              });



              </script>



              <section  id="affichage">
                  <div class="agile-tables" >
                  <div class="w3l-table-info">
                      <h2 id="forms-example" class="">La liste des events</h2>


                      <input type="text" name="search_animal" id="search_animal" class="form-control" placeholder="Rercher"/>

                      <table id ="customers">
                        <thead class ="thead-inverse">
                            <tr>
                                <th>Nom</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Supprimer</th>
                                <th>Modifier</th>
                                  </thead>
                            </tr>

                            <?php
                            foreach ($liste as $item) {
                                ?>
                                <tr>
                                    <td><?php echo $item['Nom'] ?></td>
                                    <td><?php echo $item['type'] ?></td>
                                    <td><?php echo $item['description'] ?></td>
                                    <td><?php echo $item['date'] ?></td>

                                    <td><a href="supprimerEvent.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Supprimer</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </table>
                  </div>
                  </div>

              </section>


              <script>
                $(document).ready(function() {
                  $('#search_animal').keyup(function() {
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
              <div class="charts">
                  <div class="col-md-4 w3l-char">
          <div class="charts-grids widget"  id="pdf">
            <h4 class="title">Stat des especes des animaux</h4>

            <canvas id="pie" width="922" height="813" style="width: 738px; height: 651px;"> </canvas>
          </div>
        </div>

                  <?php
                  $pdo=config::getConnexion();
                  $query= $pdo ->prepare("select count(type)as nombre,type from event GROUP by type");

                  $query->execute();
                   $stat = $query->fetchAll();

                  ?>


                  <script>

              var pieData = [
                                  <?php

                                  foreach($stat as $count) {


                                      echo "{value:".$count['nombre'].",";
                                      echo "color:'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";
                                      echo "label: '",$count['type'], "'},";



                                  }
                                          ?>



                ];


            new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

            </script>
            <script>
            function PPDDFF() {
              const element = document.getElementById("pdf");
              html2pdf()
              .from(element)
              .save();


            }
            </script>

              </div>


    </div>
        <!--//grid-->

        </div>

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
</div>
<!--//content-inner-->
<!--/sidebar-menu-->



</div>
<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu">
            <li><a href="sponsors.php"><i class="fa fa-tachometer"></i> <span>Sponsors</span>
                    <div class="clearfix"></div>
                </a></li>


            <li id="menu-academico"><a href="events.php"><i class="fa fa-envelope nav_icon"></i><span>Evenements</span>
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
