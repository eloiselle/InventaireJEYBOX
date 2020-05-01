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
      $result = $moteurRequetes->selectEtatFromID(1);

      if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "id: " . $row["id_etat"]. " - Nom: " . $row["nom"]. " - Description: " . $row["description"]. "<br>";
         }
      } else {
         echo "0 results";
      }
     ?>
  </body>
</html>
