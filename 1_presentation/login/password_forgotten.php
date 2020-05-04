<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="../../Script/script.js"></script>
    <title>Mot de passe oublié</title>
  </head>
  <body>
<main>
  <article class="paddingTop">
    <img src="../../images/JEYBOX_Logo_1037x300.png" class="logo center" alt="Jey Box">
  </article>
  <div class="window">
    <form class="login" action="#" method="post">
      <h1>Mot de passe oublié</h1>
      <hr>
      <label for="txtmail" class="labelLeft customPadding3">Courriel</label><br>
      <input id="txtmail" type="text" name="txtmail" value="" class="txtbox" placeholder="exemple@hotmail.com" autocomplete="off" required>
      <br>
      <br>
      <label for="txtpassword" class="labelLeft customPadding4">Nouveau mot de passe</label><br>
      <input id="txtpassword" type="password" name="txtpassword" value="" placeholder="" class="txtbox" autocomplete="off" required>
      <br>
      <br>
      <label for="txtconfirm" class="labelLeft customPadding5">Confirmer le mot de passe</label><br>
      <input id="txtconfirm" type="password" name="txtconfirm" value="" class="txtbox" autocomplete="off" required>
      <br>
      <br>
      <br>
      <br>
      <input type="submit" name="btnsend" class="btnLog" value="Envoyer" onclick="confirmMail(); confirmPass()">
      <br>
      <br>
    </form>
  </div>
</main>
  </body>
</html>
