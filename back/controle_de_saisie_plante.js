function controlersaisie() {


 var erreur ="Vous avez des erreur dans les cases suivantes : \n";
    var x = 0;


    var espece = document.getElementById("espece").value;

    if ((espece.length == 0) || (espece.charAt(0) != espece.charAt(0).toUpperCase())) {
        document.getElementById("div_espece").className = "form-group has-error";
        document.getElementById("err_espece").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide et doit commencer par une majuscule";
        document.getElementById("err_espece").className = "alert alert-danger";
        x++;
        erreur+="Espece \n";


    } else {
        document.getElementById("div_espece").className = "form-group has-success";
        document.getElementById("err_espece").innerHTML = "JUSTE";
        document.getElementById("err_espece").className = "alert alert-success";
    }


    var environnement = document.getElementById("environnement").value;
    if (environnement.length == 0 || (environnement.charAt(0) != environnement.charAt(0).toUpperCase())) {
        document.getElementById("div_environnement").className = "form-group has-error";
        document.getElementById("err_environnement").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide et doit commencer par une majuscule";
        document.getElementById("err_environnement").className = "alert alert-danger";
        x++;
        erreur+="Environnement \n";

    } else {
        document.getElementById("div_environnement").className = "form-group has-success";
        document.getElementById("err_environnement").innerHTML = "JUSTE";
        document.getElementById("err_environnement").className = "alert alert-success";
    }


    var prix = document.getElementById("prix").value;
    if (prix.length == 0|| prix.match(/^[0-9]+$/) == null) {
        document.getElementById("div_prix").className = "form-group has-error";
        document.getElementById("err_prix").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide et doit et doit etre en digits";
        document.getElementById("err_prix").className = "alert alert-danger";
        x++;
        erreur+="Prix \n";

    } else {
        document.getElementById("div_prix").className = "form-group has-success";
        document.getElementById("err_prix").innerHTML = "JUSTE";
        document.getElementById("err_prix").className = "alert alert-success";
    }


    var origine = document.getElementById("origine").value;
    if (origine.length == 0 || (origine.charAt(0) != origine.charAt(0).toUpperCase())) {
        document.getElementById("div_origine").className = "form-group has-error";
        document.getElementById("err_origine").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide et doit commencer par une majuscule";
        document.getElementById("err_origine").className = "alert alert-danger";
        x++;
        erreur+="Origine \n";

    } else {
        document.getElementById("div_origine").className = "form-group has-success";
        document.getElementById("err_origine").innerHTML = "JUSTE";
        document.getElementById("err_origine").className = "alert alert-success";
    }

    var image = document.getElementById("image").value;
    if (image.length == 0 || (image.charAt(0) != image.charAt(0).toUpperCase())) {
        document.getElementById("div_image").className = "form-group has-error";
        document.getElementById("err_image").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide ";
        document.getElementById("err_image").className = "alert alert-danger";
        x++;
        erreur+="Image \n";

    } else {
        document.getElementById("div_image").className = "form-group has-success";
        document.getElementById("err_image").innerHTML = "JUSTE";
        document.getElementById("err_image").className = "alert alert-success";
    }





    if (x != 0) {
        alert(erreur);

        return false;
    }



}
