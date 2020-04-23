<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <!-- Allows to find search icon for search bar -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>JEYBOX - Catégories</title>
  </head>
  <body>
    <nav>
      <ul class="menuUl">
        <li class="menuLi"><img class="imgLogo" src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></li>
        <li class="menuLi"><a class="menuButton" href="categorie.php">Catégories</a></li>
        <li class="menuLi"><a class="menuButton" href="article.php">Articles</a></li>
        <li class="menuLi"><a class="menuButton" href="consulter_reservation.php">Réservations</a></li>
        <li style="float:right"><a class="menuButton" href="#compte">Mon compte</a></li>
      </ul>
    </nav>
    <br>
    <hr>
    <br>
    <h1>Catégories</h1>
    <br><br>
    <!-- Search bar -->
    <div class="search-container">
      <form action="/action_page.php" class="searchformh">
        <input type="text" placeholder="Recherche.." name="search" class="searchtxt">
        <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
      </form>

        <div class="lstCategorie">
          <ul>
            <li>Identifiant</li>
            <li>Nom</li>
            <li>Description</li>
            <li>Nombres d'éléments</li>
          </ul>
        </div>
      </body>
</html>
