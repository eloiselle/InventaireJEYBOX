<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'moteur_requetes_bd.php';

      $moteurRequetes = new moteurRequetesBD();
      ?>

      <!-- Test for categorie_article -->
      <form method="post">
        <label for="desired_table">Table: </label>
        <select id="desired_table" name="desired_table">
          <option value="article">Article</option>
          <option value="categorie">Catégorie article</option>
          <option value="sous_categorie_article">Sous catégorie article</option>
          <option value="etat">État</option>
          <option value="reference">Réference</option>
          <option value="utilisateur">Utilisateur</option>
          <option value="permission">Permission</option>
          <option value="contact_urgence">Contact urgence</option>
          <option value="reservation">Réservation</option>
        </select>
        <label for="fid">id: </label>
        <input type="number" id="fid" name="desired_id" value="1" min='1'> <br>
        <input type="submit" name="select" value="Select from ID"/>
      </form>

      <?php
      if(isset($_POST['desired_id'])) {
        $id = $_POST['desired_id']; //its now in a varible
      }

      if(isset($_POST['desired_table'])) {
        $table = $_POST['desired_table']; //its now in a varible
      }

      if (isset($_POST['select'])) {
        switch ($table) {
          case 'article':
            $result = $moteurRequetes->selectArticleFromID($id);
            break;

          case 'categorie':
            $result = $moteurRequetes->selectCategorieFromID($id);
            break;

          case 'sous_categorie_article':
            $result = $moteurRequetes->selectSousCategorieArticleFromID($id);
            break;

          case 'contact_urgence':
            $result = $moteurRequetes->selectContactUrgenceFromID($id);
            break;

          case 'etat':
            $result = $moteurRequetes->selectEtatFromID($id);
            break;

          case 'reference':
            $result = $moteurRequetes->selectReferenceFromID($id);
            break;

          case 'utilisateur':
            $result = $moteurRequetes->selectUtilisateurFromID($id);
            break;

          case 'permission':
            $result = $moteurRequetes->selectPermissionFromID($id);
            break;

          case 'contact_urgence':
            $result = $moteurRequetes->selectContactUrgenceFromID($id);
            break;

          case 'reservation':
            $result = $moteurRequetes->selectReservationFromID($id);
            break;

          default:
            // code...
            break;
        }
        if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
               print_r($row);
           }
        } else {
           echo "0 results";
        }
      }

      // Insert into using PHP and form (unused at this time)
      if (isset($_POST['insert'])) {
        $categorieArray = [
          "nom" => "Composante électronique",
          "description" => "Objets électroniques variés pouvant servir à équiper un système d'autres sous-systèmes.",
        ];

        $moteurRequetes->createCategorieFromArray($categorieArray);
      }

      ?>
  </body>
</html>
