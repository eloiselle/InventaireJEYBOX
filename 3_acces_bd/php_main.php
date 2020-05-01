<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'gestionnaire_connexion_bd.php';

      $mySqlManager = new sqlManager();
      $mySqlManager->init_connection();

      $sql = "SELECT id_etat, nom, description FROM etat";
      $result = $mySqlManager->get_connection()->query($sql);

      if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
               echo "id: " . $row["id_etat"]. " - Nom: " . $row["nom"]. " - Description: " . $row["description"]. "<br>";
           }
        } else {
           echo "0 results";
        }
        $mySqlManager->get_connection()->close();
     ?>
  </body>
</html>
