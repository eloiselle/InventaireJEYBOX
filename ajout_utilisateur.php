<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEYBOX - Utilisateurs</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><div><a href="index.html"><img src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></div></li>
        <li><a class="button" href="gestion_categorie.php">Catégories</a></li>
        <li><a class="button" href="gestion_article.php">Articles</a></li>
        <li><a class="button" href="gestion_reservation.php">Réservations</a></li>
        <li><a class="active_button" href="gestion_utilisateur.php">Utilisateur</a></li>
      </ul>
    </nav>

<div class="container">

<i class="fa fa-question-circle tooltip floatrightpadded"><span class="tooltiptext">This better work</span></i>
  <h1 class="floatright">PlaMar94</h1><br><br>

    <form>
      <label for="fperm">Permission</label>
      <input type="text" id="fperm" name="fperm"><br><br>

      <label for="fnom">Nom</label>
      <input type="text" id="fnom" name="fnom"><br><br>

      <label for="fprenom">Prénom</label>
      <input type="text" id="fprenom" name="fprenom"><br><br>

      <label for="ftel">Téléphone</label>
      <input type="text" id="ftel" name="ftel">
      <label for="fmobile">Mobile</label>
      <input type="text" id="fmobile" name="fmobile"><br><br>

      <label for="fcourriel">Courriel</label>
      <input type="text" id="fcourriel" name="fcourriel"><br><br>

      <label for="fadr">Adresse</label>
      <input type="text" id="fadr" name="fadr">
      <label for="fappart">Appartement</label>
      <input type="text" id="fappart" name="fappart"><br><br>
      <label for="fcp">Code Postal</label>
      <input type="text" id="fcp" name="fcp"><br><br>

      <label for="fdaten">Date de naissance</label>
      <input type="text" id="fdaten" name="fdaten"><br><br>

      <label for="fcontact">Contact d'urgence</label>
      <input type="text" id="fcontact" name="fcontact">
      <label for="frelation">Relation</label>
      <input type="text" id="frelation" name="frelation"><br><br>
    </form>
    </div>
  </body>
</html>

<script>
function formulaireComplet(){
  var ok = true;
  var permission = document.getElementById("fperm");
  var nom = document.getElementById("fnom");
  var prenom = document.getElementById("fprenom");
  var tel = document.getElementById("ftel");
  var mobile = document.getElementById("fmobile");
  var cp = document.getElementById("fcp");
  var birth = document.getElementById("fdaten");
  var mail = document.getElementById("fcourriel");

  while( ok == true)
  {
    if(permission.value == ""){
      permission.focus();
      break;
    }
    if(nom.value == ""){
      nom.focus();
      break;
    }
    if(prenom.value == ""){
      prenom.focus();
      break;
    }
    if(tel.value == ""){
      tel.focus();
      break;
    }
    if(mobile.value == ""){
      mobile.focus();
      break;
    }
    if(cp.value == ""){
      cp.focus();
      break;
    }
    if(birth.value == ""){
      birth.focus();
      break;
    }
    if(mail.value == ""){
      mail.focus();
      break;
    }

  }
  alert("Le formulaire doit être rempli au complet");
}
  function validate(entry){
    var tocheck = document.getElementById(entry);
    switch(tocheck)
    {
      case document.getElementById("fnom"):
      var model = /^([A-Z]\S+)([-]([A-Z]\S+))?[ ]([A-Z]\S+)([-]([A-Z]\S+))?$/;
      if(tocheck.value.match(model))
      {
      }
      else
      {
        tocheck.innerHTML="Entrée invalide. Le nom doit comprter une majuscule et peut être composé";
      }
        break;
      case document.getElementById("fprenom"):
      var model = /^([A-Z]\S+)([-]([A-Z]\S+))?[ ]([A-Z]\S+)([-]([A-Z]\S+))?$/;
      if(tocheck.value.match(model))
      {
      }
      else
      {
        tocheck.innerHTML="Entrée invalide. Le nom doit comprter une majuscule et peut être composé";
      }
        break;
      case document.getElementById("ftel"):
        var model = /^\(?([0-9]{3})?\)?[- .]([0-9]{3})[- .]?([0-9]{4})$|/;
        if(tocheck.value.match(model))
        {
        }
        else
        {
          tocheck.innerHTML="Entrée invalide. Le résultat attendu est: (999) 999-9999 | (999)999-9999 | (999) 999.9999 | (999)999.9999 | 999.999.9999 | 999-999-9999 | 999.9999 | 999-9999";
        }
        break;
      case document.getElementById("fmobile"):
        var model = /^\(?([0-9]{3})?\)?[- .]([0-9]{3})[- .]?([0-9]{4})$|/;
        if(tocheck.value.match(model))
        {
        }
        else
        {
          tocheck.innerHTML="Entrée invalide. Le résultat attendu est: (999) 999-9999 | (999)999-9999 | (999) 999.9999 | (999)999.9999 | 999.999.9999 | 999-999-9999 | 999.9999 | 999-9999";
        }
        break;
      case document.getElementById("fcp"):
        var model = /^([A-Z][0-9][A-Z])[- ]?([0-9][A-Z][0-9])$/;
        if(tocheck.value.match(model))
        {
        }
        else
        {
          tocheck.insertAdjacentHTML("afterend","Entrée invalide. Le résultat attendu est: J1G 5H4");
        }
        break;
      case document.getElementById("fdaten"):
        var model = /^([1-31][1-31])([1-31][1-31])?[-/ ]$/;
        if(tocheck.value.match(model))
        {
        }
        else
        {
          tocheck.innerHTML="Entrée invalide. Le résultat attendu est: AAAA-MM-JJ | AAAA/MM/JJ | JJ MMMM AAAA";
        }
        break;
      case document.getElementById("fcourriel"):
        var model = /\S+@\S+\.\S+$/;
        if(tocheck.value.match(model))
        {
        }
        else
        {
          tocheck.innerHTML="Entrée invalide. Le résultat attendu est: exemple@hello.hi";
        }
        break;
