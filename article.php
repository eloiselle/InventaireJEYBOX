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
        <li><a href="index.html"><img src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>
        <li><a class="button" href="categorie.php">Catégories</a></li>
        <li><a class="active_button" href="article.php">Articles</a></li>
        <li><a class="button" href="consulter_reservation.php">Réservations</a></li>
        <li style="float:right"><a class="button" href="#compte">Mon compte</a></li>
      </ul>
    </nav>

    <table class="itemSelection">
      <!-- Purely here for aesthetic purposes -->
      <tr>
        <th><div class="halfBorderTop"></div></th>
      </tr>

      <!-- Title -->
      <tr>
        <th><h1>Articles</h1></th>
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
      <tr>
        <th>Sélection</th>
        <th>Identifiant</th>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Disponibles</th>
      </tr>

      <!-- Article #1 -->
      <tr>
        <th>
          <form action="/action_page.php">
            <input type="number" id="quantity" name="quantity" min="0" max="5" value="0">
          </form>
        </th>
        <th>RPI-3020</th>
        <th>Raspberry Pi 3 - Model B</th>
        <th>Micro-ordinateur</th>
        <th>5</th>
        <th><a class="button" href="article.php">Visionner</a></th>
      </tr>

      <!-- Article #2 -->
      <tr>
        <th>
          <form action="/action_page.php">
            <input type="number" id="quantity" name="quantity" min="0" max="2" value="0">
          </form>
        </th>
        <th>RPI-2020</th>
        <th>Raspberry Pi 2 - Model B</th>
        <th>Micro-ordinateur</th>
        <th>2</th>
        <th><a class="button" href="">Visionner</a></th>
      </tr>

      <!-- Article #3 -->
      <tr>
        <th>
          <form action="/action_page.php">
            <input type="number" id="quantity" name="quantity" min="0" max="0" value="0" disabled>
          </form>
        </th>
        <th>RPI-2010</th>
        <th>Raspberry Pi 2</th>
        <th>Micro-ordinateur</th>
        <th>0</th>
        <th><a class="button" href="">Visionner</a></th>
      </tr>

      <!-- Article #4 -->
      <tr>
        <th>
          <form action="/action_page.php">
            <input type="number" id="quantity" name="quantity" min="0" max="42" value="0">
          </form>
        </th>
        <th>LED-2030</th>
        <th>Adafruit LED Sequins - Warm White</th>
        <th>Composante électronique - LED</th>
        <th>42</th>
        <th><a class="button" href="">Visionner</a></th>
      </tr>

      <!-- Article #5 -->
      <tr>
        <th>
          <form action="/action_page.php">
            <input type="number" id="quantity" name="quantity" min="0" max="5" value="0">
          </form>
        </th>
        <th>BTR-5010</th>
        <th>Batterie PiJuice 500mAh</th>
        <th>Électricité - Batterie</th>
        <th>5</th>
        <th><a class="button" href="">Visionner</a></th>
      </tr>

      <!-- Article #6 -->
      <tr>
        <th>
          <form action="/action_page.php">
            <input type="number" id="quantity" name="quantity" min="0" max="0" value="0" disabled>
          </form>
        </th>
        <th>BTR-6010</th>
        <th>Batterie Compact Rechargeable 10400mAh</th>
        <th>Électricité - Batterie</th>
        <th>0</th>
        <th><a class="button" href="">Visionner</a></th>
      </tr>

    </table>

    <br><br>
    <div class="lstArticle">
      <table style="width=100%">

      </table>
  </body>
</html>
