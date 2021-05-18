<?php
session_start();

$_SESSION['id']=1;

include_once '../Model/avis.php';




include_once '../Controller/avisC.php';
include_once '../Model/reclamations.php';
include_once '../Controller/reclamationC.php';

$error = "";
$success = 0;
// create user
$avis= null;

// create an instance of the controller
$avisC = new avisC();
$liste=$avisC->afficheravis();

if (isset($_POST["description"])&& isset($_POST["note"])&& isset($_POST["type_avis"]))
{

  $avis = new Avis($_POST['description'],(int)$_POST['note'],(int)$_SESSION['id'],(string)$_POST["type_avis"]);

    $avisC->ajouteravis($avis);
    $success = 1;

    header("location:gestion_avis.php");

}

//reclamation

$reclamations= null;
// create an instance of the controller

$reclamationsC = new reclamationsC();

$liste2=$reclamationsC->afficherreclamation();

if (isset($_POST["type_reclamation"])&& isset($_POST["description_reclamation"]))
     {

    $reclamations = new reclamations((string)$_POST['type_reclamation'],(string)$_POST['description_reclamation'],(int)$_SESSION['id']);
    $reclamationsC->ajouterreclamation($reclamations);

    header("location:gestion_avis.php");
  }




?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Input :: w3layouts</title>
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
    <style>
        h2 {text-align: center;}
        table {
            border-collapse: collapse;
            width: 100%;
            color: #a40212;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #25fde9;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
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
                <!--heder end here-->


                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Gestion des avis et des reclamations</li>
                </ol>
                <!--grid-->
                <section id="ajout">
                   <div class="grid-form">
                       <div class="grid-form1">
                         <center>
                           <h2 id="forms-example" class=""> consulter la liste des avis</h2>
                         </center>
                         <br></br>

                         <section  id="affichage">
                                       <div class="grid-form1">

                                        <br></br>
                                        <br></br>
                                        <form action="rechercheravis.php" method="get">
                                        chercher par <input type="text" name="search"><br>

                                        choix: <select name="column">
                                                 <option value="type_avis">type_avis</option>
                                                 <option value="note">note</option>
                                                 <option value="nom">nom</option>
                                                 <option value="prenom">prenom</option>
                                                  </select><br>
                                        <input type="submit" name="button" value="rechercher">
                                        </form>



<br></br>
<br></br>

          <?php
          $column = $_GET['column'];
   if( isset($_GET['column']) ){
     echo("<table border='1' align='center'><tr>");
          echo("<tr>");
              echo("<th>");
              echo ("type de l'avis");
               echo ("</th>");
               echo("<th>");
               echo ("Note");
                echo ("</th>");
                echo("<th>");
                echo ("Avis");
                 echo ("</th>");
                 echo("<th>");
                 echo ("Date de l'envoi de l'avis");
                  echo ("</th>");
                  echo("<th>");
                  echo ("Le client");
                   echo ("</th>");
          echo("</tr>");
        ?>  <?php
        $avisC=new avisC();
   $pdo=config::getConnexion();
       $query= $pdo ->prepare("SELECT avis.*,utilisateur.nom,utilisateur.prenom FROM avis inner join utilisateur on avis.id_user=utilisateur.id order by $column ");
       $query->execute();
       $result = $query->fetchAll();


        ?>
        <?php
        foreach($result as $rows)
    {
        echo (" <td>");
        echo $rows['type_avis'];
        echo ("</td>");
        echo ("<td>");
        echo $rows['note'];
        echo ("</td>");
        echo ("<td>");
        echo $rows['description'];
        echo ("</td>");
        echo ("<td>");
        echo $rows['date_avis'];
        echo ("</td>");
        echo ("<td>");
        echo $rows['nom'];
        echo $rows['prenom'];
        echo ("</td>");

    echo("</tr>");
}
?>
<?php
echo("</table>");}
else
{echo("can't find the title");}
?>











                                         </table>

                                       </div>
   <!--retour a la page d'acc-->
                                       <form action="gestion_avis.php" method="" >

                                                 <input type="submit" name="retour" value="retour">

                                                 <!--//retour a la page d'acc-->

                             <!--statistique sur les avis-->

                                       <section>
                                         <script src="..\js/Chart.js"></script>>
                                         <div class="charts-grids widget">
                                                       <h4 class="title"> statistique sur les types des avis </h4>
                                                       <canvas id="pie" width="488" height="438" style="width: 488px; height: 438px;"> </canvas>
                                                     </div>
                                                     <?php
                                                                                                       $pdo=config::getConnexion();
                                                                                                           $query= $pdo ->prepare("SELECT COUNT(type_avis)AS nombre,type_avis FROM avis GROUP by type_avis");
                                                                                                           $query->execute();
                                                                                                           $result = $query->fetchAll();
                                                                                                       ?>
                                                    <script>

             var pieData = [
                  <?php
                   foreach ($result as $row) {
                     // code...
                     echo "{value:".$row['nombre'].",";
                                        echo "color:'rgb(",rand (0,255 ),",",rand (0,255 ), ",",rand (0,255 ),")',";echo "label: '",$row['type_avis'], "'},";

} ?>

               ] ;


           new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);

           </script>

                                       </section>

                                                       <!--//stat-->

<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

                                   </section>



                                   <section  id="affichagere">
                                     <h2 id="forms-example" class=""> consulter la liste des reclamations</h2>
                                                 <div class="grid-form1">
                                                   <form action="rechercherreclamation.php" method="get">
                                                   chercher par <input type="text" name="search"><br>

                                                   choix: <select name="column">
                                                            <option value="type_reclamation">type_reclamation</option>

                                                            <option value="nom">nom</option>
                                                            <option value="prenom">prenom</option>
                                                             </select><br>
                                                   <input type="submit" name="button" value="rechercher">
                                                   </form>

                                                   <form action="trierreclamation.php" method="get" >
                                                   trier par: <select name="column">

                                                            <option value="nom">nom</option>
                                                            <option value="prenom">prenom</option>
                                                             </select><br>
                                                             <input type="submit" name="button" value="trier">
                                                   </form>




                                                 <table>
                                                     <tr>
                                                         <th>type_reclamation</th>
                                                         <th>date_reclamation</th>
                                                         <th>description_reclamation</th>
                                                         <th>client</th>

                                                     </tr>
                                                     <?php
                                                     foreach ($liste2 as $row){
                                                       ?>
                                                         <tr>
                                                           <td><?php echo $row['type_reclamation'];  ?></td>
                                                           <td><?php echo $row['date_reclamation'];  ?></td>
                                                           <td><?php echo $row['description_reclamation'];  ?></td>
                                                           <td><?php echo $row['nom'];  ?> <?php echo $row['prenom'];  ?></td>




                                                         </tr>
                                                     <?php
                                                   }
                                                   ?>
                                                   </table>
                                                 </div>


                           <form action="" method="POST" class="form">
                             </div>
                               <div class="form-group">
   <h3 for="exampleInputPassword1"> </h3>


                                 <br></br>

                                 <div class="form-group">

                                 </div>

                               <div class="panel-footer">
                                   <div class="row">
                                       <div class="col-sm-8 col-sm-offset-2">
                                           <input class="btn-primary btn" type="submit" value="            ">
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
                <br></br>






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
                    <p>© 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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


                    <li id="menu-academico"><a href="gestion_avis.php"><i class="fa fa-envelope nav_icon"></i><span>Gestion des avis et des reclamations</span>
                            <div class="clearfix"></div>
                        </a></li>
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
