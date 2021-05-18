<?php
  include_once "BlogC.php";
  include_once "commentC.php";
  include_once "commentm.php";

  session_start();

  $comment = null;
  $commentC = new commentC();
  if (isset($_POST["text"])&& isset($_POST["id_b"]) &&isset($_SESSION['e']))
   {

       $comment = new comment(
           $_POST['text'],
           $_POST['id_b'],
           $_SESSION['e']

       );

  $commentC->ajoutercomment($comment);
  header("location:gestion_blog_commentaire.php");
  }

  $blogC = new blogC();
  $result=$blogC->afficherblogg();

  // On prolonge la session

  // On teste si la variable de session existe et contient une valeur
  if (empty($_SESSION['e'])) {
  	// Si inexistante ou nulle, on redirige vers le formulaire de login
  	header('Location:../../BACK/signin.php');
  }
  $nom_u=$_SESSION['e'];


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



  <section id="blog">
      <br>
      <hr>
      <!--blog end-->
      <!--blog end-->
      <?php foreach($result as $rows) { ?>

      <section id="news 1">
          <div class="container">
              <h2>trending news </h2><span><br>
                  15 november 2017</span></h2>
              <div>
                  <img src="../back/images/<?php echo $rows['image']; ?>">
              </div>

              <br>
              <h3 style="color: rgb(29, 138, 165);">

                  <?php echo $rows['titre'];?> :
              </h3>
              <br>
              <div style="font-size: 38px;">
                  <?php echo $rows['article'];?>
              </div>
              <br>
              <h3>Les commentaire :</h3>

              <?php
                          $cmnt=$commentC->affichercommentbyid($rows['id']);
                          foreach($cmnt as $col) {?>
              <hr >



              <h4 style="color :Blue;">
                  <?php echo $col['nom_u']; ?> :
              </h4>
              <br>
              <?php echo $col['text'];?>
              <hr>
              <?php } ?>

              <br>
              <form method="POST" >
                  <h4>ajouter un commentaire :</h4>
                  <br>

                  <input type="hidden" name="id_b" id="id_b" value="<?php echo $rows['id']; ?>">
                 <input type="text" class="form-control input-lg m-bot15 "  onfocusout="majus_nom();" name="text" id="text" required>

                  <label id="element" name="erreur" style="color: red; display: none;">commentaire vide invalide</label>
  <br>
                  <input type="submit" class="book-btn" name="submit" value="   ajouter   " onClick="cmnt()">


              </form>
              </div>
          <hr>

          <?php } ?>
          <script>
                  function majus_nom() {
                      var ch = document.getElementById("text").value;
                      var element = document.getElementById("element");
                      if (ch === "") { element.style.display = "block"; } else { element.style.display = "none"; }
                  }

                   function cmnt() {
                          majus_nom();
                          var error1 = document.getElementById("element");
                          if ((error1.style.display == "none"))
                              alert("comentaire bien ajouter" ); else alert("Votre commentaire est mal rempli");


                      }
          </script>
          <!--/.caption-->

      </section>
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
