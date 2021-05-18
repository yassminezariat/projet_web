
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
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

  <!-- Site CSS -->

<style type="text/css">
    #aDiv{width: 300px; height: 300px; margin: 0 auto;}
    body {
  /**background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa9E8MLs_rO4scn2FKCw_CTgT3AGITGfBAAm5Nt_uWOHPznHX0r13hnQ2uIhRXt9ngEpw&usqp=CAU');**/
  background-image: url("img_tree.gif"), url("paper.gif");
  background-color: #F0E68C;
 /* background-repeat: no-repeat;*/
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>

</head>
<body>
<div id="aDiv">
    <div class="container" align="center">



        <form action="addClient.php"  method="post" align="center">

        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                            <h1 class="m-b-20"> SIGN UP</h1>
                </div>
<br>
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">


                        <input name="nom" class="form-control" type="text" placeholder="nom" required="">


<BR> </div> </div>
        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">

                        <input name="prenom"   class="form-control" type="text" placeholder="prenom" required="">
                <br> </div> </div>
                <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
        <input name="email" type="text" pattern=".+@gmail.com|.+@esprit.tn" class="form-control" placeholder="email" required="">
<br> </div> </div>

        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                        <input name="login" class="form-control" type="text" placeholder="login" required="">
<br> </div> </div>

        <div class="row">
                   <div class="col-md-12">
            <div class="form-group">  <input name="password" class="form-control" type="password" placeholder="password" required="">
<br> </div> </div>
<div class="row">
                   <div class="col-md-12">
            <div class="form-group">
                <input name="password1" type="password" class="form-control" placeholder=" confirmer password" required="">
                <br> </div> </div>

        <div class="row">
                   <div class="col-md-12">
            <div class="form-group"> <input name="adresse" class="form-control" type="text" placeholder="ville" required="">
    <br> </div> </div>

        <div class="row">
                   <div class="col-md-12">
            <div class="form-group"> <input name="tel" type="text" class="form-control" placeholder="tel" required="">
<br> </div> </div>
<div id="aDiv">

                        <button type="submit"   class="btn btn-primary btn-lg btn-block" id="form-submit" >créer</button >
    <br>

                        <button type="reset" class="btn btn-primary btn-lg btn-block" class="btn-222" >annuler</button>
        <br> </div>
        </form>

<br>
<br>



<!-- jQuery -->


<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/sticky.js"></script>

<!-- Stellar -->
<script src="../js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="../js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="../js/bootstrap-datepicker.min.js"></script>
<!-- CS Select -->
<script src="../js/classie.js"></script>
<script src="../js/selectFx.js"></script>

<!-- Main JS -->
<script src="../js/main.js"></script>
</body>
</html>
