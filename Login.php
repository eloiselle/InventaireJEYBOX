<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>S'authentifier</title>
  </head>
  <body>
<main>
  <article class="paddingTop">
    <img src="images/small_logo.png" class="logo center" alt="Jey Box" >
  </article>
  <div class="window">
    <form class="login" action="index.html" method="get">
      <label class="title">Connexion</label>
      <br>
      <br>
      <hr>
      <br>
      <label for="txtuser" class="labelLeft customPadding1">Utilisateur</label><br>
      <input id="txtuser" type="text" name="txtuser" value="" placeholder="Admin" class="txtbox" required>
      <br>
      <br>
      <label for="txtpass" class="labelLeft customPadding2">Mot de passe</label><br>
      <input id="txtpass" type="password" name="txtpass" value="" class="txtbox">
      <br>
      <br>
      <br>
      <input type="submit" name="btnlogin" class="btnLog" value="Se connecter">
      <br>
      <br>
      <a href="ForgotPass.php" title = "Récupérez votre mot de passe" class="forgot">Mot de passe oublié ?</a>
    </form>

  </div>
</main>
  </body>
</html>
