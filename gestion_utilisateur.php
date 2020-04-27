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
        <li><a href="index.html"><img src="images/JEYBOX_Logo_1037x300.png" alt="Logo JEYBOX" width="173" height="50"></a></li>
        <li><a class="button" href="gestion_categorie.php">Catégories</a></li>
        <li><a class="button" href="gestion_article.php">Articles</a></li>
        <li><a class="button" href="gestion_reservation.php">Réservations</a></li>
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
        <th><h1>Utilisateur</h1></th>
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
        <th>Identifiant</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Type</th>
      </tr>

      <!-- Utilisateur #1 -->
      <tr class="item">
        <th>Admin</th>
        <th>Dupuis</th>
        <th>Kathleen</th>
        <th>Administrateur</th>
        <th><a class="button" href="utilisateur.php">Visionner</a></th>
      </tr>

      <!-- Utilisateur #2 -->
      <tr class="item">
        <th>BouFel99</th>
        <th>Bouchard</th>
        <th>Félix</th>
        <th>Employé</th>
        <th><a class="button" href="utilisateur.php">Visionner</a></th>
      </tr>

      <!-- Utilisateur #3 -->
      <tr class="item">
        <th>DubAud66</th>
        <th>Dubois</th>
        <th>Audrey</th>
        <th>Employé</th>
        <th><a class="button" href="utilisateur.php">Visionner</a></th>
      </tr>

      <!-- Utilisateur #4 -->
      <tr class="item">
        <th>LacMax67</th>
        <th>Lacharité</th>
        <th>Maxime</th>
        <th>Employé</th>
        <th><a class="button" href="utilisateur.php">Visionner</a></th>
      </tr>

      <!-- Utilisateur #5 -->
      <tr class="item">
        <th>RocRog55</th>
        <th>Rocher</th>
        <th>Roger</th>
        <th>Étudiant</th>
        <th><a class="button" href="utilisateur.php">Visionner</a></th>
      </tr>

      <!-- Utilisateur #6 -->
      <tr class="item">
        <th>PlaMar94</th>
        <th>Platane</th>
        <th>Mario</th>
        <th>Étudiant</th>
        <th><a class="button" href="utilisateur.php">Visionner</a></th>
      </tr>
    </table>
  </body>
</html>
