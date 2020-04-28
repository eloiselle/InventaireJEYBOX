

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test PHP Connection Script</title>
  </head>
  <body>
    <h3>Welcome to the PHP Connect Test</h3>

    <?php

    echo "PHP is working!";
    $servername = "127.0.0.1:3306";
    $username = "deltahit";
    $password = "";
    $dbname = "inventaire_jeybox";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    echo "Establishing connection";
    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

    echo "Preparing query";
    $sql = "SELECT id_etat, nom, description FROM etat";
    $result = $conn->query($sql);
    echo "Executed query";

    if ($result->num_rows > 0) {
      echo "Inside IF";
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "id: " . $row["id_etat"]. " - Nom: " . $row["nom"]. " - Description: " . $row["description"]. "<br>";
       }
    } else {
       echo "0 results";
    }
    $conn->close();
    echo "Reached end of PHP";
    ?>
  </body>
</html>
