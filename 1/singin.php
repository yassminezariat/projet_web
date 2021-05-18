<?php

  session_start();

  include_once '../back/Controller/ClientC.php';
  include_once '../back/Model/Client.php';
$message="";
$Client1C = new clientC();

$ClientC = new ClientC();

if (isset($_POST["email"]) &&
    isset($_POST["password"])) {  if (!empty($_POST["email"]) && !empty($_POST["password"]))
    {   $message=$ClientC->connexionUser($_POST["email"],$_POST["password"]);
        $_SESSION['e'] = $_POST["email"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur

        if($message!='pseudo ou le mot de passe est incorrect') {

            $user = $Client1C->recupererrole($_POST['email']);
            if ($user['role'] == 'client') {
                header('Location:index.php'); //client
            }else
                { header('Location:../back/');} //admin
        }
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>
<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>Creature Animals Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Creature Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="css/blast.min.css" rel="stylesheet" />
    <!-- portfolio -->
    <link href="css/portfolio.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



  <div class="modal-content">
    <form action="" method="POST">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="#" method="POST" class="p-sm-3">
                      <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Username</label>
                          <input type="text" class="form-control" placeholder="email" name="email" id="email" required="">
                      </div>
                      <div class="form-group">
                          <label for="password" class="col-form-label">Password</label>
                          <input type="password" class="form-control" placeholder="password" name="password" id="password" required="">
                      </div>
                      <div class="right-w3l">
                          <input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Se Connecter" onClick="validation()">
                      </div>
                      <div class="row sub-w3l my-3">
                          <div class="col-sm-6 sub-w3_pvt">

                              <label for="brand1">
                                Vous n'avez pas un compte ?
                                <a href="inscreption.php">S'inscrire</a>

                          </div>
                          <div class="col-sm-6 forgot-w3l text-sm-right">
                              <a href="#" class="text-secondary">Forgot Password?</a>
                          </div>
                      </div>
                      
                  </form>
              </div>
            </form>
          </div>

    <!-- //blog modal3-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- Banner  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner  Responsiveslides -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/counter.js"></script>
    <!-- portfolio -->
    <script src="js/jquery.picEyes.js"></script>
    <script>
        $(function() {
            //picturesEyes($('.demo li'));
            $('.demo li').picEyes();
        });
    </script>
    <!-- //portfolio -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script>
            function vide_log() {
                var ch = document.getElementById("login").value;
                var element = document.getElementById("elementlog");
                if (ch === "") { element.style.display = "block"; } else { element.style.display = "none"; }
            }
            function vide_pass() {
                var ch = document.getElementById("pass").value;
                var element = document.getElementById("elementpass");
                if (ch === "") { element.style.display = "block"; } else { element.style.display = "none"; }
            }
        function validation(){
            vide_log();
            vide_pass();
        }
        </script>

    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- color switch -->
    <script src="js/blast.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>
