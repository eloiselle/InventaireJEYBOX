

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test PHP Connection Script</title>
  </head>
  <body>
    <h3>Welcome to the PHP Connect Test</h3>

    <?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'qweasd';
    $dbname = 'inventaire_jeybox';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id_etat, nom, description FROM etat";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "id: " . $row["id_etat"]. " - Nom: " . $row["nom"]. " - Description: " . $row["description"]. "<br>";
       }
    } else {
       echo "0 results";
    }
    $conn->close();
    ?>
  </body>
</html>
