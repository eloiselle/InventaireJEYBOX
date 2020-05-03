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
        <li><a class="active_button" href="gestion_operations.php">Opérations</a></li>
        <li><a class="button" href="../2_logique/gestion_gestionnaires.php">Gestionnaires</a></li>
        <li style="float:right"><div class="navigator">PHP</div></li>
      </ul>
    </nav>

    <?php

    // ===================
    //     Variables
    // ===================

    // Objets d'accès à la BD
    include 'moteur_requetes_bd.php';
    $moteurRequetes = new moteurRequetesBD();

    // Associe les numéros aux noms des items
    $listElementsNumbers = [
      0 => "article",
      1 => "categorie_article",
      2 => "contact_urgence",
      3 => "etat",
      4 => "permission",
      5 => "reference",
      6 => "reservation",
      7 => "sous_categorie_article",
      8 => "utilisateur"
    ];

    // Associe les noms des items à leurs équivalent bien écrit
    $listElementsTitles = [
      "article" => "Article",
      "categorie_article" => "Catégorie",
      "contact_urgence" => "Contact Urgence",
      "etat" => "État",
      "permission" => "Permission",
      "reference" => "Référence",
      "reservation" => "Réservation",
      "sous_categorie_article" => "Sous-Catégorie",
      "utilisateur" => "Utilisateur"
    ];

    // Associe les noms des items à leurs propriétés de noms dans la base de données
    $listeNomPropriete = [
      "article" => [
        "size" => 4,
        1 => "nom",
        2 => "fiche_url",
        3 => "id_sous_categorie",
        4 => "id_etat",
      ],
      "categorie_article" => [
        "size" => 2,
        1 => "nom",
        2 => "description",
      ],
      "contact_urgence" => [
        "size" => 5,
        1 => "nom",
        2 => "prenom",
        3 => "relation",
        4 => "telephone",
        5 => "nom_utilisateur"
      ],
      "etat" => [
        "size" => 2,
        1 => "nom",
        2 => "description",
      ],
      "permission" => [
        "size" => 1,
        1 => "nom",
      ],
      "reference" => [
        "size" => 4,
        1 => "nom",
        2 => "url",
        3 => "description",
        4 => "id_article",
      ],
      "reservation" => [
        "size" => 7,
        1 => "date_prevue",
        2 => "date_prise_possession",
        3 => "date_retour_prevue",
        4 => "date_retour_effectif",
        5 => "commentaire",
        6 => "nom_utilisateur",
        7 => "id_article"
      ],
      "sous_categorie_article" => [
        "size" => 3,
        1 => "nom",
        2 => "description",
        3 => "id_categorie",
      ],
      "utilisateur" => [
        "size" => 8,
        1 => "nom_utilisateur",
        2 => "mot_de_passe",
        3 => "nom",
        4 => "prenom",
        5 => "courriel",
        6 => "telephone",
        7 => "date_naissance",
        8 => "id_permission",
      ],
    ];

    // Associe les noms des items à leurs propriétés de types dans la base de données
    $listeTypePropriete = [
        "article" => [
          "size" => 4,
          1 => "text",
          2 => "text",
          3 => "number",
          4 => "number",
        ],
        "categorie_article" => [
          "size" => 2,
          1 => "text",
          2 => "text",
        ],
        "contact_urgence" => [
          "size" => 5,
          1 => "text",
          2 => "text",
          3 => "text",
          4 => "text",
          5 => "text"
        ],
        "etat" => [
          "size" => 2,
          1 => "text",
          2 => "text",
        ],
        "permission" => [
          "size" => 1,
          1 => "text",
        ],
        "reference" => [
          "size" => 4,
          1 => "text",
          2 => "text",
          3 => "text",
          4 => "number",
        ],
        "reservation" => [
          "size" => 7,
          1 => "date",
          2 => "date",
          3 => "date",
          4 => "date",
          5 => "text",
          6 => "text",
          7 => "number"
        ],
        "sous_categorie_article" => [
          "size" => 3,
          1 => "text",
          2 => "text",
          3 => "number",
        ],
        "utilisateur" => [
          "size" => 8,
          1 => "text",
          2 => "text",
          3 => "text",
          4 => "text",
          5 => "text",
          6 => "text",
          7 => "date",
          8 => "number",
        ],
      ];

      // Créer les boutons pour les menus
      echo '  <form id="formResetDB" method="post">';
      echo '    <input type="submit" name="resetBD" value="Reset BD"/>';
      echo '  </form>';
      for ($x = 0; $x < 9; $x++) {
          $activeCategory = $listElementsNumbers[$x];
          echo '<button onclick="myFunction' . $activeCategory . '()">' . $activeCategory . '</button>';
      }
      echo '<br>';

      // Pour chaque élément
      for ($x = 0; $x < 9; $x++) {
          $activeCategory = $listElementsNumbers[$x];
          echo '  <form id="form' . $activeCategory . '" method="post" style="display: none;">';
          echo '    <h1> ' . $listElementsTitles[$activeCategory] . ' </h1>';
          echo '    <table id="table' . $activeCategory . '">';
          echo '      <tr>';
          echo '        <td colspan="2" style="text-align:center;"><h2>Select</h2></td>';
          echo '      </tr>';
          echo '      <tr>';

          if ($activeCategory != "utilisateur") {
          echo '        <td><label for="fSelect' . $activeCategory . 'ID">ID: </label></td>';
          echo '        <td><input type="number" name="fSelect' . $activeCategory . 'ID" value=1 min=1></td>';
          } else {
          echo '        <td><label for="fSelect' . $activeCategory . 'ID">Nom utilisateur: </label></td>';
          echo '        <td><input type="text" name="fSelect' . $activeCategory . 'ID"></td>';
          }
          echo '      </tr>';
          echo '      <tr>';
          echo '        <td colspan="2" style="text-align:center;"><input type="submit" name="select' . $activeCategory . '" value="Select ' . $activeCategory . ' from ID"/></td>';
          echo '      </tr>';
          echo '      <tr>';
          echo '        <td colspan="2" style="text-align:center;"><input type="submit" name="delete' . $activeCategory . '" value="Delete ' . $activeCategory . ' from ID"/></td>';
          echo '      </tr>';
          echo '      <tr>';
          echo '        <td colspan="2" style="text-align:center;"><h2>Insert</h2></td>';
          echo '      </tr>';

          // Pour chaque élément, pour chacun de leur nombre d'éléments
          for ($i=0; $i < $listeNomPropriete[$activeCategory]["size"]; $i++) {
              echo '    <tr>';
              echo '        <td><label for="fInsert' . $activeCategory . $listeNomPropriete[$activeCategory][$i+1] . '">' . $listeNomPropriete[$activeCategory][$i+1] . ': </label></td>';

              // Détermine le type d'élément
              switch ($listeTypePropriete[$activeCategory][$i+1]) {
            case 'text':
              echo '    <td><input type="text" name="fInsert' . $activeCategory . $listeNomPropriete[$activeCategory][$i+1] . '"></td>';
              break;
            case 'number':
              echo '    <td><input type="number" name="fInsert' . $activeCategory . $listeNomPropriete[$activeCategory][$i+1] . '" value=1 min=1></td>';
              break;
            case 'date':
              echo '    <td><input type="date" name="fInsert' . $activeCategory . $listeNomPropriete[$activeCategory][$i+1] . '"></td>';
              break;

            default:
              break;
          }
              echo '  </tr>';
          }
          echo '  <tr>';
          echo '    <td colspan="2" style="text-align:center;"><input type="submit" name="insert' . $activeCategory . '" value="Insert ' . $activeCategory . ' from fields"/></td>';
          echo '  </tr>';
          echo '</table>';
          echo '</form>';
          echo '<script>';
          echo '  function myFunction' . $activeCategory . '() {';
          for ($y = 0; $y < 9; $y++) {
              echo '    var element' . $listElementsNumbers[$y] . ' = document.getElementById("form' . $listElementsNumbers[$y] . '");';
              echo '    element' . $listElementsNumbers[$y] . '.style.display = "none";';
          }
          echo '    var x = document.getElementById("form' . $activeCategory . '");';
          echo '      x.style.display = "block";';
          echo '  }';
          echo '</script>';
      }

      for ($x = 0; $x < 9; $x++) {
          $activeCategory = $listElementsNumbers[$x];

          // Show result of select statement
          if (isset($_POST['select' . $activeCategory])) {
              $id = $_POST['fSelect'. $activeCategory . 'ID'];
              print_r($moteurRequetes->selectFromID($activeCategory, $id));
          }

          // Show result of delete statement
          if (isset($_POST['delete' . $activeCategory])) {
              $id = $_POST['fSelect'. $activeCategory . 'ID'];
              print_r($moteurRequetes->deleteFromID($activeCategory, $id));
          }

          // Insérer élément dans la BD avec un tableau d'objets
          if (isset($_POST['insert' . $activeCategory])) {

              // Tableau vide prêt à être populé
              $array = [];

              // Insérer dans le tableau les éléments à insérer dans la BD
              for ($i=0; $i < $listeNomPropriete[$activeCategory]["size"]; $i++) {

                  // Condition pour filtrer les champs de dates
                  if ($listeTypePropriete[$activeCategory][$i+1] !== "date") {

                    // Si ce n'est pas une date, on ajoute le contenu du champ dans le tableau
                    $array += [ $listeNomPropriete[$activeCategory][$i+1] =>
                      $_POST['fInsert' . $activeCategory . $listeNomPropriete[$activeCategory][$i+1]]];
                  } else {

                    // Si c'est une date, on converti l'entrée en format date pour SQL avant de l'intégrer dans le tableau
                    $array += [ $listeNomPropriete[$activeCategory][$i+1] =>
                      date("Y-m-d H:i:s",strtotime($_POST['fInsert' . $activeCategory . $listeNomPropriete[$activeCategory][$i+1]]))];
                  }
              }

              // Exécuter la requête
              $result = $moteurRequetes->insertFromArray($activeCategory, $array);
              if ($activeCategory !== "utilisateur") {
                echo 'ID du nouvel élément dans la table ' . $activeCategory . ': ' . $result;
              } else {
                echo 'Utilisateur ' . $array["nom_utilisateur"] . ' créer avec succès.';
              }

          }

          // Requête pour recréer la BD
          if (isset($_POST['resetBD'])) {
              $result = $moteurRequetes->recreateDatabase();
          }
      }
    ?>
  </body>
</html>
