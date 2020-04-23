<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" />
    <title>index</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><img src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></li>
        <li><a class="button" href="categorie.php">Catégories</a></li>
        <li><a class="active_button" href="article.php">Articles</a></li>
        <li><a class="button" href="consulter_reservation.php">Réservations</a></li>
        <li style="float:right"><a class="button" href="#compte">Mon compte</a></li>
      </ul>
    </nav>
    <br>
    <hr>
    <br>
    <h1>Articles</h1>
    <br><br>
    <!-- Search bar -->
    <div class="search-container">
      <form action="/action_page.php" class="searchformh">
        <input type="text" placeholder="Recherche.." name="search" class="searchtxt">
        <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
      </form>
    </div>

    <div class="lstArticle">
      <table style="width=100%">
        <tr>
          <th ="200">Sélection</th>
          <th width="200">Identifiant</th>
          <th width="200">Nom</th>
          <th width="200">Catégorie</th>
          <th width="200">Disponibles</th>
        </tr>
      </table>
  </body>
</html>
