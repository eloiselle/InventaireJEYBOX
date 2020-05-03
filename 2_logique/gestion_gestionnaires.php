<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <title>PHP Operations</title>
</head>
  <body>
    <nav>
      <ul>
        <li><a href="../index.html"><img src="../images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>
        <li><a class="button" href="../3_acces_bd/gestion_operations.php">Opérations</a></li>
        <li><a class="active_button" href="gestion_gestionnaires.php">Gestionnaires</a></li>
        <li style="float:right"><div class="navigator">PHP</div></li>
      </ul>
    </nav>

    <?php
    include_once "gestionnaire_article.php";
    include_once "article.php";
    include_once "categorie.php";
    include_once "etat.php";
    include_once "permission.php";
    include_once "reference.php";
    include_once "reservation.php";
    include_once "sous_categorie_article.php";
    include_once "utilisateur.php";

    $moteurRequetes = new moteurRequetesBD();
    $monArticle = gestionnaireArticle::creerArticle($moteurRequetes, 1);
    $maReference = gestionnaireArticle::creerReference($moteurRequetes, 1);

    echo $monArticle;

     ?>

  </body>
</html>
