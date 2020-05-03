<?php

  include 'gestionnaire_connexion_bd.php';

  class moteurRequetesBD
  {
      // Variables
      private $mySqlManager = null;

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
        "article" => 'INSERT INTO article (nom, fiche_url, id_sous_categorie, id_etat) VALUES ( ?, ?, ?, ?)',
        "categorie_article" => 'INSERT INTO categorie_article (nom, description) VALUES (?, ?)',
        "contact_urgence" => 'INSERT INTO contact_urgence (nom, prenom, relation, telephone, nom_utilisateur) VALUES (?, ?, ?, ?, ?)',
        "etat" => 'INSERT INTO etat (nom, description) VALUES (?, ?)',
        "permission" => 'INSERT INTO permission (nom) VALUES (?)',
        "reference" => 'INSERT INTO reference (nom, url, description, id_article) VALUES (?, ?, ?, ?)',
        "reservation" => 'INSERT INTO reservation (date_prevue , date_prise_possession , date_retour_prevue , date_retour_effectif, commentaire , nom_utilisateur , id_article) VALUES (?, ?, ?, ?, ?, ?, ?)',
        "sous_categorie_article" => 'INSERT INTO sous_categorie_article (nom, description, id_categorie) VALUES (?, ?, ?)',
        "utilisateur" => 'INSERT INTO utilisateur (nom_utilisateur , mot_de_passe , nom , prenom , courriel , telephone , date_naissance , id_permission) VALUES (?, ?, ?, ?, ?, ?, ?, ?)',
      ];

      // Constructor
      public function __construct()
      {
          $this->mySqlManager = new sqlManager();
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

      // Article
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
      //                    REMOVERS
      // ==============================================

      // Article
      public function deleteArticleFromID($id_article)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE FROM article WHERE id_article = ' . $id_article;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Categorie
      public function deleteCategorieFromID($id_categorie)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE FROM categorie_article WHERE id_categorie = ' . $id_categorie;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Contact Urgence
      public function deleteContactUrgenceFromID($id_contact_urgence)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE  FROM contact_urgence WHERE id_contact_urgence = ' . $id_contact_urgence;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Etat
      public function deleteEtatFromID($id_etat)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE  FROM etat WHERE id_etat = ' . $id_etat;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Permission
      public function deletePermissionFromID($id_permission)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE  FROM permission WHERE id_permission = ' . $id_permission;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Reference
      public function deleteReferenceFromID($id_reference)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE  FROM reference WHERE id_reference = ' . $id_reference;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Reservation
      public function deleteReservationFromID($id_reservation)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE  FROM reservation WHERE id_reservation = ' . $id_reservation;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Sous Catégorie Article
      public function deleteSousCategorieFromID($id_sous_categorie)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE  FROM sous_categorie_article WHERE id_sous_categorie = ' . $id_sous_categorie;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      // Utilisateur
      public function deleteUtilisateurFromID($nom_utilisateur)
      {
          $this->mySqlManager->init_connection();

          $sql = 'DELETE  FROM utilisateur WHERE nom_utilisateur = ' . $nom_utilisateur;
          $result = $this->mySqlManager->get_connection()->query($sql);

          $this->mySqlManager->get_connection()->close();
          return $result;
      }

      public function recreateDatabase()
      {
          $sqlFile = file_get_contents("recreer_bd.sql");
          $result =  $this->mySqlManager->get_connection()->multi_query($sqlFile);
          return $result;
      }
  }
