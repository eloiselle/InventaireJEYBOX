<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEYBOX - Catégories</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="../../index.html"><img src="../../images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>

        <!-- Link to "Consulter Article" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('gestion_categorie.php')) {
          echo '<li><a class="active_button" href="gestion_categorie.php">Catégories</a></li>';
        } else {
          echo '<li><div class="inactive_button">Catégories</div></li>';
        } ?>

        <!-- Link to "Consulter Article" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('gestion_article.php')) {
          echo '<li><a class="button" href="gestion_article.php">Articles</a></li>';
        } else {
          echo '<li><div class="inactive_button">Articles</div></li>';
        } ?>

        <!-- Link to "Consulter Article" -->
        <?php // Check if page exists, if it does, create a link to it, otherwise disable it
        if (file_exists('gestion_reservation.php')) {
          echo '<li><a class="button" href="gestion_reservation.php">Réservations</a></li>';
        } else {
          echo '<li><div class="inactive_button">Réservations</div></li>';
        } ?>

        <li style="float:right"><div class="navigator">Employé</div></li>
      </ul>
    </nav>

    <table class="itemSelection">
      <!-- Purely here for aesthetic purposes -->
      <tr>
        <th><div class="halfBorderTop"></div></th>
      </tr>

      <!-- Title -->
      <tr>
        <th><h1>Catégories</h1></th>
      </tr>
    <!-- Search bar -->
      <tr>
        <th>
          <div class="search-container">
            <form action="/action_page.php" class="searchformh">
              <input type="text" placeholder="Recherche.." name="search" class="searchtxt">
              <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </th>
      </tr>

      <!-- En-tête de table -->
      <tr class="entete">
        <th style="width: 20%">Identifiant</th>
        <th style="width: 20%">Nom</th>
        <th style="width: 20%">Description</th>
        <th style="width: 10%">Nombres d'éléments</th>
        <th style="width: 10%"></th>
        <th style="width: 10%"></th>

      </tr>

      <!-- Catégorie #1 -->
      <tr class="item">
        <th>RPI</th>
        <th>Micro Ordinateur</th>
        <th>Ordinateur de format "Carte de crédit"</th>
        <th>7</th>
        <th><a class="button" href="categorie.php">Modifier</a></th>
      </tr>

      <!-- Catégorie #2 -->
      <tr class="item">
        <th>LED</th>
        <th>Composante Électronique - LED</th>
        <th>Lumière usant de la technologie LED</th>
        <th>42</th>
        <th><a class="button" href="categorie.php">Modifier</a></th>
      </tr>

      <!-- Catégorie #3 -->
      <tr class="item">
        <th>BTR</th>
        <th>Électricité - Batterie</th>
        <th>Batteries de capacité variés</th>
        <th>6</th>
        <th><a class="button" href="categorie.php">Modifier</a></th>
      </tr>
    </table>
  </body>
</html>
