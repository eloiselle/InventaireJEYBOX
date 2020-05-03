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
        <li><a class="button" href="php_main.php">PHP Operations</a></li>
        <li style="float:right"><div class="navigator">PHP</div></li>
      </ul>
    </nav>

    <?php
    // Variables
    $listElementsNumbers = [
      0 => "Article",
      1 => "CategorieArticle",
      2 => "ContactUrgence",
      3 => "Etat",
      4 => "Permission",
      5 => "Reference",
      6 => "Reservation",
      7 => "SousCategorieArticle",
      8 => "Utilisateur"
    ];

    $listElementsTitles = [
      "Article" => "Article",
      "CategorieArticle" => "Catégorie",
      "ContactUrgence" => "Contact Urgence",
      "Etat" => "État",
      "Permission" => "Permission",
      "Reference" => "Référence",
      "Reservation" => "Réservation",
      "SousCategorieArticle" => "Sous-Catégorie",
      "Utilisateur" => "Utilisateur"
    ];

    $listeNomPropriete = [
      "Article" => [
        "size" => 4,
        1 => "nom",
        2 => "fiche_url",
        3 => "id_sous_categorie",
        4 => "id_etat",
      ],
      "CategorieArticle" => [
        "size" => 2,
        1 => "nom",
        2 => "description",
      ],
      "ContactUrgence" => [
        "size" => 5,
        1 => "nom",
        2 => "prenom",
        3 => "relation",
        4 => "telephone",
        5 => "nom_utilisateur"
      ],
      "Etat" => [
        "size" => 2,
        1 => "nom",
        2 => "description",
      ],
      "Permission" => [
        "size" => 1,
        1 => "nom",
      ],
      "Reference" => [
        "size" => 4,
        1 => "nom",
        2 => "prenom",
        3 => "relation",
        4 => "telephone",
      ],
      "Reservation" => [
        "size" => 7,
        1 => "date_prevue",
        2 => "date_prise_possession",
        3 => "date_retour_prevue",
        4 => "date_retour_effectif",
        5 => "commentaire",
        6 => "nom_utilisateur",
        7 => "id_article"
      ],
      "SousCategorieArticle" => [
        "size" => 3,
        1 => "nom",
        2 => "description",
        3 => "id_categorie",
      ],
      "Utilisateur" => [
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

    $listeTypePropriete = [
        "Article" => [
          "size" => 4,
          1 => "text",
          2 => "text",
          3 => "number",
          4 => "number",
        ],
        "CategorieArticle" => [
          "size" => 2,
          1 => "text",
          2 => "text",
        ],
        "ContactUrgence" => [
          "size" => 5,
          1 => "text",
          2 => "text",
          3 => "text",
          4 => "text",
          5 => "number"
        ],
        "Etat" => [
          "size" => 2,
          1 => "text",
          2 => "text",
        ],
        "Permission" => [
          "size" => 1,
          1 => "text",
        ],
        "Reference" => [
          "size" => 4,
          1 => "text",
          2 => "text",
          3 => "text",
          4 => "text",
        ],
        "Reservation" => [
          "size" => 7,
          1 => "date",
          2 => "date",
          3 => "date",
          4 => "date",
          5 => "text",
          6 => "text",
          7 => "number"
        ],
        "SousCategorieArticle" => [
          "size" => 3,
          1 => "text",
          2 => "text",
          3 => "number",
        ],
        "Utilisateur" => [
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

      for ($x = 0; $x < 8; $x++) {
        $activeCategory = $listElementsNumbers[$x];
        echo '<button onclick="myFunction' . $activeCategory . '()">' . $activeCategory . '</button>';
      }
      echo '<br>';

      for ($x = 0; $x < 8; $x++) {
        $activeCategory = $listElementsNumbers[$x];
        echo '  <form id="form' . $activeCategory . '" method="post" style="display: none;">';
        echo '    <h1> ' . $listElementsTitles[$activeCategory] . ' </h1>';
        echo '    <table id="table' . $activeCategory . '">';
        echo '      <tr>';
        echo '        <td colspan="2" style="text-align:center;"><h2>Select</h2></td>';
        echo '      </tr>';
        echo '      <tr>';
        echo '        <td><label for="fSelect' . $activeCategory . 'ID">ID: </label></td>';
        echo '        <td><input type="number" name="fSelect' . $activeCategory . 'ID" value=1 min=1></td>';
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
        for ($y = 0; $y < 8; $y++) {
          echo '    var element' . $listElementsNumbers[$y] . ' = document.getElementById("form' . $listElementsNumbers[$y] . '");';
          echo '    element' . $listElementsNumbers[$y] . '.style.display = "none";';
        }
        echo '    var x = document.getElementById("form' . $activeCategory . '");';
        echo '      x.style.display = "block";';
        echo '  }';
        echo '</script>';
      }

      include 'moteur_requetes_bd.php';
      $moteurRequetes = new moteurRequetesBD();

      for ($x = 0; $x < 8; $x++) {
        $activeCategory = $listElementsNumbers[$x];

        // Show result of select statement
        if(isset($_POST['select' . $activeCategory])) {
          $id = $_POST['fSelect'. $activeCategory . 'ID'];
          switch ($activeCategory) {
            case 'Article':
              $result = $moteurRequetes->selectArticleFromID($id);
              break;
            case 'CategorieArticle':
              $result = $moteurRequetes->selectCategorieFromID($id);
              break;
            case 'ContactUrgence':
              $result = $moteurRequetes->selectContactUrgenceFromID($id);
              break;
            case 'Etat':
              $result = $moteurRequetes->selectEtatFromID($id);
              break;
            case 'Permission':
              $result = $moteurRequetes->selectPermissionFromID($id);
              break;
            case 'Reference':
              $result = $moteurRequetes->selectReferenceFromID($id);
              break;
            case 'Reservation':
              $result = $moteurRequetes->selectReservationFromID($id);
              break;
            case 'SousCategorieArticle':
              $result = $moteurRequetes->selectSousCategorieFromID($id);
              break;
            case 'Utilisateur':
              $result = $moteurRequetes->selectUtilisateurFromID($id);
              break;

            default:
              break;
          }

          if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 print_r($row);
             }
          } else {
             echo "<p>The SelectID for " . $activeCategory . " returned no results. Please select another ID.</p>";
          }
        }

        // Delete element from ID
        if(isset($_POST['delete' . $activeCategory])) {
          $id = $_POST['fSelect'. $activeCategory . 'ID'];
          switch ($activeCategory) {
            case 'Article':
              $result = $moteurRequetes->deleteArticleFromID($id);
              break;
            case 'CategorieArticle':
              $result = $moteurRequetes->deleteCategorieFromID($id);
              break;
            case 'ContactUrgence':
              $result = $moteurRequetes->deleteContactUrgenceFromID($id);
              break;
            case 'Etat':
              $result = $moteurRequetes->deleteEtatFromID($id);
              break;
            case 'Permission':
              $result = $moteurRequetes->deletePermissionFromID($id);
              break;
            case 'Reference':
              $result = $moteurRequetes->deleteReferenceFromID($id);
              break;
            case 'Reservation':
              $result = $moteurRequetes->deleteReservationFromID($id);
              break;
            case 'SousCategorieArticle':
              $result = $moteurRequetes->deleteSousCategorieFromID($id);
              break;
            case 'Utilisateur':
              $result = $moteurRequetes->deleteUtilisateurFromID($id);
              break;

            default:
              break;
          }
          if ($result == 1) {
            echo "L'entrée avec le ID " . $id . " a été supprimée avec succès.";
          } else {
            echo "Une erreur s'est produite. Code d'erreur: " . $result;
          }
        }

        // Insert element from Array

        if(isset($_POST['insert' . $activeCategory])) {
          $id = $_POST['fSelect'. $activeCategory . 'ID'];
          $array = [];

          // Create object to be inserted
          for ($i=0; $i < $listeNomPropriete[$activeCategory]["size"]; $i++) {
            $array += [ $listeNomPropriete[$activeCategory][$i+1] => $_POST['fInsert' . $activeCategory . $listeNomPropriete[$activeCategory][$i+1]]];
          }

          switch ($activeCategory) {
            case 'Article':
              $result = $moteurRequetes->insertArticleFromArray($array);
              break;
            case 'CategorieArticle':
              $result = $moteurRequetes->insertCategorieFromArray($array);
              break;
            case 'ContactUrgence':
              $result = $moteurRequetes->insertContactUrgenceFromArray($array);
              break;
            case 'Etat':
              $result = $moteurRequetes->insertEtatFromArray($array);
              break;
            case 'Permission':
              $result = $moteurRequetes->insertPermissionFromArray($array);
              break;
            case 'Reference':
              $result = $moteurRequetes->insertReferenceFromArray($array);
              break;
            case 'Reservation':
              $result = $moteurRequetes->insertReservationFromArray($array);
              break;
            case 'SousCategorieArticle':
              $result = $moteurRequetes->insertSousCategorieFromArray($array);
              break;
            case 'Utilisateur':
              $result = $moteurRequetes->insertUtilisateurFromArray($array);
              break;

            default:
              break;
          }

          echo 'ID du nouvel élément dans la table ' . $activeCategory . ': ' . $result;
        }
      }
    ?>
  </body>
</html>
