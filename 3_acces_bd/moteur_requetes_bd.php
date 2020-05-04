<?php /****************************************
Fichier:        consulter_article.php
Auteur:         Émile
Fonctionnalité: Autre - Gestion des requêtes fait à la BD
Date:           22 avril 2020
***********************************************/

  include 'gestion_connexion_bd.php';

  class moteurRequetesBD
  {
      // Variables
      private $mySqlManager = null;

      // Liste de requêtes SQL pour sélectionner tous les IDs d'une table
      private $sqlQueriesSelectAllIDs = [
        "article" => 'SELECT id_article FROM article',
        "categorie_article" => 'SELECT id_categorie FROM categorie_article',
        "contact_urgence" => 'SELECT id_contact_urgence FROM contact_urgence',
        "etat" => 'SELECT id_etat FROM etat',
        "permission" => 'SELECT id_permission FROM permission',
        "reference" => 'SELECT id_reference FROM reference',
        "reservation" => 'SELECT id_reservation FROM reservation',
        "sous_categorie_article" => 'SELECT id_sous_categorie FROM sous_categorie_article',
        "utilisateur" => 'SELECT nom_utilisateur FROM utilisateur',
      ];

      // Liste de requêtes SQL pour sélectionner un ID
      private $sqlQueriesSelectID = [
        "article" => 'SELECT * FROM article WHERE id_article = ?',
        "categorie_article" => 'SELECT * FROM categorie_article WHERE id_categorie = ?',
        "contact_urgence" => 'SELECT * FROM contact_urgence WHERE id_contact_urgence = ?',
        "etat" => 'SELECT * FROM etat WHERE id_etat = ?',
        "permission" => 'SELECT * FROM permission WHERE id_permission = ?',
        "reference" => 'SELECT * FROM reference WHERE id_reference = ?',
        "reservation" => 'SELECT * FROM reservation WHERE id_reservation = ?',
        "sous_categorie_article" => 'SELECT * FROM sous_categorie_article WHERE id_sous_categorie = ?',
        "utilisateur" => 'SELECT * FROM utilisateur WHERE nom_utilisateur = ?',
      ];

      // Liste de requêtes SQL pour supprimer à partir d'un ID
      private $sqlQueriesDeleteID = [
        "article" => 'DELETE FROM article WHERE id_article = ?',
        "categorie_article" => 'DELETE FROM categorie_article WHERE id_categorie = ?',
        "contact_urgence" => 'DELETE FROM contact_urgence WHERE id_contact_urgence = ?',
        "etat" => 'DELETE FROM etat WHERE id_etat = ?',
        "permission" => 'DELETE FROM permission WHERE id_permission = ?',
        "reference" => 'DELETE FROM reference WHERE id_reference = ?',
        "reservation" => 'DELETE FROM reservation WHERE id_reservation = ?',
        "sous_categorie_article" => 'DELETE FROM sous_categorie_article WHERE id_sous_categorie = ?',
        "utilisateur" => 'DELETE FROM utilisateur WHERE nom_utilisateur = ?',
      ];

      // Liste de requêtes SQL pour insérer un array
      private $sqlQueriesInsertArray = [
        "article" => 'INSERT INTO article (identifiant, nom, quantite, fiche_url, id_sous_categorie, id_etat) VALUES ( ?, ?, ?, ?, ?, ?)',
        "categorie_article" => 'INSERT INTO categorie_article (nom, description) VALUES (?, ?)',
        "contact_urgence" => 'INSERT INTO contact_urgence (nom, prenom, relation, telephone, nom_utilisateur) VALUES (?, ?, ?, ?, ?)',
        "etat" => 'INSERT INTO etat (nom, description) VALUES (?, ?)',
        "permission" => 'INSERT INTO permission (nom) VALUES (?)',
        "reference" => 'INSERT INTO reference (nom, url, description, id_article) VALUES (?, ?, ?, ?)',
        "reservation" => 'INSERT INTO reservation (date_prevue , date_prise_possession , date_retour_prevue , date_retour_effectif, commentaire , nom_utilisateur , id_article) VALUES (?, ?, ?, ?, ?, ?, ?)',
        "sous_categorie_article" => 'INSERT INTO sous_categorie_article (nom, description, id_categorie) VALUES (?, ?, ?)',
        "utilisateur" => 'INSERT INTO utilisateur (nom_utilisateur , mot_de_passe , nom , prenom , courriel , telephone , date_naissance , id_permission) VALUES (?, ?, ?, ?, ?, ?, ?, ?)',
      ];

      // Liste de requêtes SQL pour mettre-à-jour à partir d'un array
      private $sqlQueriesUpdateArray = [
        "article" => 'UPDATE article SET identifiant = ?, nom = ?, quantite = ? fiche_url = ?, id_sous_categorie = ?, id_etat = ? WHERE id_article = ?',
        "categorie_article" => 'UPDATE categorie_article SET nom = ?, description = ? WHERE id_categorie = ?',
        "contact_urgence" => 'UPDATE contact_urgence SET nom = ?, prenom = ?, relation = ?, telephone = ?, nom_utilisateur = ? WHERE id_contact_urgence = ?)',
        "etat" => 'UPDATE etat SET nom = ?, description = ? WHERE id_etat = ?',
        "permission" => 'UPDATE permission SET nom = ? WHERE id_permission = ?',
        "reference" => 'UPDATE reference SET nom = ?, url = ?, description = ?, id_article = ? WHERE id_reference = ?',
        "reservation" => 'UPDATE reservation SET date_prevue = ? , date_prise_possession = ? , date_retour_prevue = ? , date_retour_effectif = ? , commentaire = ? , nom_utilisateur = ? , id_article = ? WHERE id_reservation = ?',
        "sous_categorie_article" => 'UPDATE sous_categorie_article SET nom = ? , description = ? , id_categorie = ? WHERE id_sous_categorie = ?',
        "utilisateur" => 'UPDATE utilisateur SET mot_de_passe = ? , nom = ? , prenom = ? , courriel = ? , telephone = ? , date_naissance = ? , id_permission = ? WHERE nom_utilisateur = ?',
      ];

      // Constructor
      public function __construct()
      {
          $this->mySqlManager = new sqlManager();
      }

      // ==============================================
      //                   FETCH_ALL
      // ==============================================

      public function selectAllIDs($objectName)
      {
          // Initialise la connexion à la BD
          $this->mySqlManager->init_connection();

          // Variables utiles
          $conn = $this->mySqlManager->get_connection();
          $lowerObjectName = strtolower($objectName);

          // Exécuter la requête SQL
          $result = $conn->query($this->sqlQueriesSelectAllIDs[$lowerObjectName]);
          $resultArray = $result->fetch_all(MYSQLI_ASSOC);

          // Fermer les connexions établies
          $conn->close();

          // Retourner les résultats
          return $resultArray;
      }

      // ==============================================
      //                    SELECT
      // ==============================================

      public function selectFromID($objectName, $id)
      {
          // Initialise la connexion à la BD
          $this->mySqlManager->init_connection();

          // Variables utiles
          $conn = $this->mySqlManager->get_connection();
          $lowerObjectName = strtolower($objectName);

          // Préparer la requête SQL
          if ($stmt = $conn->prepare($this->sqlQueriesSelectID[$lowerObjectName])) {
              $stmt->bind_param("s", $id);
          } else {
              die("Erreur: la préparation de la requête SQL a échoué: (" . $stmt->errno . ") " . $stmt->error);
          }

          // Exécute la requête SQL
          if (!$stmt->execute()) {
              die("\r\nErreur: execute() de la requête SQL a échoué: (" . $stmt->errno . ") " . $stmt->error);
          }

          // Récupérer les résultats
          $result = $stmt->get_result();
          $row = $result->fetch_assoc();

          // Fermer les connexions établies
          $stmt->close();
          $conn->close();

          // Retourner les résultats
          return $row;
      }

      // ==============================================
      //                    DELETE
      // ==============================================

      public function deleteFromID($objectName, $id)
      {
          // Initialise la connexion à la BD
          $this->mySqlManager->init_connection();

          // Variables utiles
          $conn = $this->mySqlManager->get_connection();
          $lowerObjectName = strtolower($objectName);

          // Préparer la requête SQL
          if ($stmt = $conn->prepare($this->$sqlQueriesDeleteID[$lowerObjectName])) {
              $stmt->bind_param("s", $id);
          } else {
              die("Erreur: la préparation de la requête SQL a échoué: (" . $stmt->errno . ") " . $stmt->error);
          }

          // Exécute la requête SQL
          if (!$stmt->execute()) {
              die("\r\nErreur: execute() de la requête SQL a échoué: (" . $stmt->errno . ") " . $stmt->error);
          }

          // Récupérer les résultats
          $result = $stmt->get_result();
          $row = $result->fetch_assoc();

          // Fermer les connexions établies
          $stmt->close();
          $conn->close();

          // Retourner les résultats
          return $row;
      }

      // ==============================================
      //                    INSERT
      // ==============================================

      public function insertFromArray($objectName, $array)
      {
          // Initialise la connexion à la BD
          $this->mySqlManager->init_connection();

          // Variables utiles
          $conn = $this->mySqlManager->get_connection();
          $lowerObjectName = strtolower($objectName);

          // Test si le nom de l'objet est valide dans le tableau d'objets
          if ($this->sqlQueriesInsertArray[$lowerObjectName]) {
              // Charge la requête correspondant au numéro d'objet
              $stmt = $this->sqlQueriesInsertArray[$lowerObjectName];
          } else {
              // Message d'erreur
              die("Erreur: le nom d'objet n'est pas reconnu. Il doit exister dans la liste d'objets.");
          }

          // Préparer la requête SQL
          if (!$stmt = $conn->prepare($this->sqlQueriesInsertArray[$lowerObjectName])) {
              die("Erreur: la préparation de la requête SQL a échoué: (" . $conn->errno . ") " . $conn->error);
          }

          // Créer les arguments pour "bind_param" en mode intéractif
          // Ceci permet d'utiliser la même méthode pour tous les objets
          // (les paramètres sont ajoutés selon le nombre nécessaire)
          $sqltype = ''; // Contiendra le type (tous "s" pour le moment (string))
          $sqldata = []; // Contiendra les données (contenu de $array)
          foreach ($array as $name => $data) {
              $sqltype .= 's';
              $sqldata[] = $data; // DOIT être une référence
          }
          $stmt->bind_param($sqltype, ...$sqldata);

          // Exécute la requête SQL
          if (!$stmt->execute()) {
              print_r($stmt);
              die("\r\nErreur: execute() de la requête SQL a échoué: (" . $stmt->errno . ") " . $stmt->error);
          }

          // Obtenir le ID du dernier élément inséré
          $result = $this->mySqlManager->get_connection()->query('SELECT LAST_INSERT_ID()');
          $conn->close();

          // Extraire le ID du "result set"
          $row = $result -> fetch_assoc();
          return $row["LAST_INSERT_ID()"];
      }

      // ==============================================
      //                    UPDATE
      // ==============================================

      public function updateFromArray($objectName, $array)
      {
          // Initialise la connexion à la BD
          $this->mySqlManager->init_connection();

          // Variables utiles
          $conn = $this->mySqlManager->get_connection();
          $lowerObjectName = strtolower($objectName);

          // Test si le nom de l'objet est valide dans le tableau d'objets
          if ($this->sqlQueriesInsertArray[$lowerObjectName]) {
              // Charge la requête correspondant au numéro d'objet
              $stmt = $this->sqlQueriesUpdateArray[$lowerObjectName];
          } else {
              // Message d'erreur
              die("Erreur: le nom d'objet n'est pas reconnu. Il doit exister dans la liste d'objets.");
          }

          // Préparer la requête SQL
          if (!$stmt = $conn->prepare($this->sqlQueriesUpdateArray[$lowerObjectName])) {
              die("Erreur: la préparation de la requête SQL a échoué: (" . $conn->errno . ") " . $conn->error);
          }

          // Retourner le premier élément du tableau (le id) en arrière (pour correspondre à la structure du update)
          $array[] = array_shift($array);

          // Créer les arguments pour "bind_param" en mode intéractif
          // Ceci permet d'utiliser la même méthode pour tous les objets
          // (les paramètres sont ajoutés selon le nombre nécessaire)
          $sqltype = ''; // Contiendra le type (tous "s" pour le moment (string))
          $sqldata = []; // Contiendra les données (contenu de $array)
          foreach ($array as $name => $data) {
              $sqltype .= 's';
              $sqldata[] = $data; // DOIT être une référence
          }
          $stmt->bind_param($sqltype, ...$sqldata);

          // Exécute la requête SQL
          if (!$stmt->execute()) {
              print_r($stmt);
              die("\r\nErreur: execute() de la requête SQL a échoué: (" . $stmt->errno . ") " . $stmt->error);
          }

          // Obtenir le ID du dernier élément inséré
          $result = $this->mySqlManager->get_connection()->query('SELECT LAST_INSERT_ID()');
          $conn->close();

          // Extraire le ID du "result set"
          $row = $result -> fetch_assoc();
          return $row["LAST_INSERT_ID()"];
      }

      // Appelle les instructions dans le fichier "recreer_bd.sql" pour recréer la base de données au complet
      public function recreateDatabase()
      {
          $this->mySqlManager->init_connection();
          $sqlFile = file_get_contents("recreer_bd.sql");
          $result =  $this->mySqlManager->get_connection()->multi_query($sqlFile);
          return $result;
      }
  }
