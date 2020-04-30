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
        <li><a href="../../index.html"><img src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>
        <li><a class="button" href="gestion_categorie.php">Catégories</a></li>
        <li><a class="button" href="gestion_article.php">Articles</a></li>
        <li><a class="button" href="gestion_reservation.php">Réservations</a></li>
        <li><a class="active_button" href="gestion_utilisateur.php">Utilisateur</a></li>
        <li style="float:right"><div class="navigator">Directeur</div></li>
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
