function controlersaisie() {


 var erreur ="Vous avez des erreur dans les cases suivantes : \n";
    var x = 0;




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


    var type = document.getElementById("type").value;

    if ((type.length == 0) || (type.charAt(0) != type.charAt(0).toUpperCase())) {
        document.getElementById("div_type").className = "form-group has-error";
        document.getElementById("err_type").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide et doit commencer par une majuscule";
        document.getElementById("err_type").className = "alert alert-danger";
        x++;
        erreur+="type \n";


    } else {
        document.getElementById("div_type").className = "form-group has-success";
        document.getElementById("err_type").innerHTML = "JUSTE";
        document.getElementById("err_type").className = "alert alert-success";
    }


    var appartenance = document.getElementById("appartenance").value;
    if (appartenance.length == 0 || (appartenance.charAt(0) != appartenance.charAt(0).toUpperCase())) {
        document.getElementById("div_appartenance").className = "form-group has-error";
        document.getElementById("err_appartenance").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide et doit commencer par une majuscule";
        document.getElementById("err_appartenance").className = "alert alert-danger";
        x++;
        erreur+="appartenance \n";

    } else {
        document.getElementById("div_appartenance").className = "form-group has-success";
        document.getElementById("err_appartenance").innerHTML = "JUSTE";
        document.getElementById("err_appartenance").className = "alert alert-success";
    }





    var description = document.getElementById("description").value;
    if (description.length == 0 || (description.charAt(0) != description.charAt(0).toUpperCase())) {
        document.getElementById("div_description").className = "form-group has-error";
        document.getElementById("err_description").innerHTML = "ATTENTION ! Cette case ne doit pas etre vide et doit commencer par une majuscule";
        document.getElementById("err_description").className = "alert alert-danger";
        x++;
        erreur+="description \n";

    } else {
        document.getElementById("div_description").className = "form-group has-success";
        document.getElementById("err_description").innerHTML = "JUSTE";
        document.getElementById("err_description").className = "alert alert-success";
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
