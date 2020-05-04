<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/style.css" />
    <!-- Allows to find search icon for search bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEYBOX - Articles</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="../../index.html"><img src="../../images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>

        <!-- Link to "Consulter Article" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('../controleurs/CTRL_article.php')) {
            echo '<li><a class="active_button" href="../controleurs/CTRL_article.php">Articles</a></li>';
        } else {
            echo '<li><div class="inactive_button">Article</div></li>';
        } ?>

        <!-- Link to "Consulter Réservation" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('../controleurs/CTRL_reservation.php')) {
            echo '<li><a class="button" href="../controleurs/CTRL_reservation.php">Réservations</a></li>';
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
          <th colspan="8"><h1>Articles</h1></th>
        </tr>

        <!-- Search bar -->
        <tr>
          <th colspan="8">
            <div class="search-container">
              <form action="/action_page.php" class="searchformh">
                <input type="text" placeholder="Recherche.." name="search" class="searchtxt">
                <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </th>
        </tr>

        <!-- En-tête de table -->
        <tr class="entete" style="width: auto">
          <th style="width: 10%">Sélection</th>
          <th style="width: 10%">Identifiant</th>
          <th style="width: 20%">Nom</th>
          <th style="width: 20%">Catégorie / Sous catégorie</th>
          <th style="width: 10%" class="dispo">Disponibles</th>
          <th style="width: 10%"></th>
        </tr>

        <?php
        sort($listeArticles);
        for ($i=0; $i < count($listeArticles); $i++) {
            $associatedSousCategorieArticle = gestionnaireCategorie::fetchSousCategorieArticleFromBD($moteurRequetes, $listeArticles[$i]->get_id_sous_categorie());
            $associatedCategorieArticle = gestionnaireCategorie::fetchCategorieArticleFromBD($moteurRequetes, $associatedSousCategorieArticle->get_id_categorie());

            echo '<!-- Article #' . ($i+1) . ' -->';
            echo '<tr class="item">';
            echo '  <th>';
            echo '    <form action="/action_page.php">';
            echo '      <input class="amountSelection" type="number" id="quantity" name="quantity" min="0" max="' . '" value="0">';
            echo '    </form>';
            echo '  </th>';
            echo '  <th>' . $listeArticles[$i]->get_identifiant() . '</th>';
            echo '  <th>' . $listeArticles[$i]->get_nom() . '</th>';
            echo '  <th>' . $associatedCategorieArticle->get_nom() . ' / ' . $associatedSousCategorieArticle->get_nom() . '</th>';
            echo '  <th class="dispo">' . $listeArticles[$i]->get_quantite() . '</th>';
            echo '  <th><a class="button" href="article.php">Visionner</a></th>';
            echo '</tr>';
        }

        ?>
      </table>

      <table class="tblOptions">
        <tr>
          <th style="width: 10%"><a class="btnRetour" href="../../index.html">Précédent</a></th>
          <th style="width: 10%"><a class="btnEffacerSelection" href="../controleurs/CTRL_article.php">Effacer la sélection</a></th>
          <th style="width: 40%"></th>
          <th style="width: 10%"><a class="btnReserver" href="../../index.html">Réserver</a></th>
        </tr>
      </table>

    </div>
  </body>
</html>
