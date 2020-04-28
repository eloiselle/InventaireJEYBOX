

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test PHP Connection Script</title>
  </head>
  <body>
    <h3>Welcome to the PHP Connect Test</h3>

    <?php
    $dbname = 'inventaire_jeybox';
    $dbuser = 'deltahit';
    $dbpass = '';
    $dbhost = '127.0.0.1';
    $connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
    mysql_select_db($dbname) or die("Could not open the database '$dbname'");

    $result = mysql_query("SELECT id_etat, nom, description FROM etat");
    while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
        printf("ID: %s  Nom: %s Description: %s <br>", $row[0], $row[1], $row[2]);
    }
    ?>
  </body>
</html>
