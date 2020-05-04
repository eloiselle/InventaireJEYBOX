<?php /****************************************
Fichier:        consulter_reservation.php
Auteur:         Émile, Jérôme et Yannick
Fonctionnalité: FW-RES-01 - Consultation des réservations
Date:           22 avril 2020
***********************************************/ ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css" />
    <!-- Allows to find search icon for search bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEYBOX - Réservations</title>
  </head>
  <body>
    <nav class="col-m-12 col-12">
      <ul>
        <li><a href="../../index.html"><img src="../../images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>

        <!-- Link to "Consulter Article" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('../controleurs/CTRL_article.php')) {
            echo '<li><a class="button" href="../controleurs/CTRL_article.php">Articles</a></li>';
        } else {
            echo '<li><div class="inactive_button">Article</div></li>';
        } ?>

        <!-- Link to "Consulter Réservation" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('../controleurs/CTRL_reservation.php')) {
            echo '<li><a class="active_button" href="../controleurs/CTRL_reservation.php">Réservations</a></li>';
        } else {
            echo '<li><div class="inactive_button">Réservations</div></li>';
        } ?>

        <li style="float:right"><div class="navigator">Client</div></li>
      </ul>
    </nav>
    <div class="container">
      <table class="itemSelection">
        <!-- Purely here for aesthetic purposes -->
        <tr>
          <th><div class="halfBorderTop"></div></th>
        </tr>

        <!-- Title -->
        <tr>
          <th colspan="8"><h1>Réservations</h1></th>
        </tr>

        <!-- Search bar -->
        <tr>
          <th colspan="8">
            <div class="search-container" >
              <form action="/action_page.php" class="searchformh">
                <input type="text" placeholder="Recherche.." name="search" class="searchtxt">
                <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </th>
        </tr>

        <!-- En-tête de table -->
        <tr class="entete">
          <th style="width: 5%">ID</th>
          <th style="width: 10%">Date prise prévue</th>
          <th style="width: 10%">Date prise effectif</th>
          <th style="width: 10%">Date retour prévue</th>
          <th style="width: 10%">Date retour effectif</th>
          <th style="width: 10%">Utilisateur</th>
          <th style="width: 13%">Identifiant Article</th>
          <th style="width: 2%">En cours</th>
        </tr>

          <?php
          sort($listeReservation);
          for ($i=0; $i < count($listeReservation); $i++) {
              $associatedArticle = gestionnaireArticle::fetchArticleFromBD($moteurRequetes, $listeReservation[$i]->get_id_article());

              echo '<!-- Réservation #' . ($i+1) . ' -->';
              echo '<tr class="item">';
              echo '  <th>' . $listeReservation[$i]->get_id() . '</th>';
              echo '  <th>' . $listeReservation[$i]->get_date_prevue() . '</th>';
              echo '  <th>' . $listeReservation[$i]->get_date_prise_possession() . '</th>';
              echo '  <th>' . $listeReservation[$i]->get_date_retour_prevue() . '</th>';
              echo '  <th>' . $listeReservation[$i]->get_date_retour_effectif() . '</th>';
              echo '  <th>' . $listeReservation[$i]->get_nom_utilisateur() . '</th>';
              echo '  <th><i class="fa fa-question-circle tooltip"><span class="tooltiptext">' . $associatedArticle->get_nom() . '</span></i>   ' . $associatedArticle->get_identifiant() .  '</th>';
              echo '  <th>';
              echo '    <form action="/action_page.php">';
              echo '      <input style="width: auto" type="checkbox" id="inprogress" name="inprogress" disabled>';
              echo '    </form>';
              echo '  </th>';
              echo '</tr>';
          }
          ?>
      </table>

      <table class="tblOptions">
        <tr>
          <th style="width: 10%"><a class="btnRetour" href="../../index.html">Précédent</a></th>
        </tr>
      </table>

    </div>
  </body>
</html>
