<?php

  include 'gestionnaire_connexion_bd.php';

  class moteurRequetesBD
  {
      // Variables
      private $mySqlManager = null;

      // Liste de requêtes SQL pour sélectionner un ID, reste à concaténer le ID
      private $sqlQueriesSelectID = [
        "article" => 'SELECT * FROM article WHERE id_article = ',
        "categorie_article" => 'SELECT * FROM categorie_article WHERE id_categorie = ',
        "contact_urgence" => 'SELECT * FROM contact_urgence WHERE id_contact_urgence = ',
        "etat" => 'SELECT * FROM etat WHERE id_etat = ',
        "permission" => 'SELECT * FROM permission WHERE id_permission = ',
        "reference" => 'SELECT * FROM reference WHERE id_reference = ',
        "reservation" => 'SELECT * FROM reservation WHERE id_reservation = ',
        "sous_categorie_article" => 'SELECT * FROM sous_categorie_article WHERE id_sous_categorie = ',
        "utilisateur" => 'SELECT * FROM utilisateur WHERE nom_utilisateur = ',
      ];

      // Constructor
      public function __construct()
      {
          $this->mySqlManager = new sqlManager();
          $this->mySqlManager->init_connection();
      }

      // ==============================================
      //                    SELECTOR
      // ==============================================

      public function selectFromID($objectName, $id)
      {
          // Initialiser une connexion à la BD
          $this->mySqlManager->init_connection();

          // Créer la requête SQL
          $sql = $this->sqlQueriesSelectID[$objectName] . $id;

          // Exécute la requête et ferme la connexion SQL
          $result = $this->mySqlManager->get_connection()->query($sql);
          $nbChamps = $this->mySqlManager->get_connection()->field_count;
          $this->mySqlManager->get_connection()->close();

          // Retourner la ligne
          $row = $result->fetch_assoc();
          return $row;
      }

      // ==============================================
      //                    CREATORS
      // ==============================================

      // Article
      public function insertArticleFromArray($array_article)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO article (nom, fiche_url, id_sous_categorie, id_etat) VALUES (
        "' . $array_article["nom"] . '",
        "' . $array_article["fiche_url"] . '",
        "' . $array_article["id_sous_categorie"] . '",
        "' . $array_article["id_etat"] . '")' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Categorie
      public function insertCategorieFromArray($array_categorie)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO categorie_article (nom, description) VALUES (
        "' . $array_categorie["nom"] . '",
        "' . $array_categorie["description"] . '");' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Contact Urgence
      public function insertContactUrgenceFromArray($array_contact_urgence)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO contact_urgence (nom, prenom, relation, telephone, nom_utilisateur) VALUES (
        "' . $array_contact_urgence["nom"] . '",
        "' . $array_contact_urgence["prenom"] . '",
        "' . $array_contact_urgence["relation"] . '",
        "' . $array_contact_urgence["telephone"] . '",
        "' . $array_contact_urgence["nom_utilisateur"] . '")' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Etat
      public function insertEtatFromArray($array_etat)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO etat (nom, description) VALUES (
        "' . $array_etat["nom"] . '",
        "' . $array_etat["description"] . '")' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Permission
      public function insertPermissionFromArray($array_permission)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO permission (nom) VALUES (
        "' . $array_permission["nom"] . '")' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Reference
      public function insertReferenceFromArray($array_reference)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO reference (nom, url, description, id_article) VALUES (
        "' . $array_reference["nom"] . '",
        "' . $array_reference["url"] . '",
        "' . $array_reference["description"] . '",
        "' . $array_reference["id_article"] . '")' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Reservation
      public function insertReservationFromArray($array_reservation)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO reservation (date_prevue , date_prise_possession , date_retour_prevue , date_retour_effectif, commentaire , nom_utilisateur , id_article) VALUES (
        "' . $array_reservation["date_prevue"] . '",
        "' . $array_reservation["date_prise_possession"] . '",
        "' . $array_reservation["date_retour_prevue"] . '",
        "' . $array_reservation["date_retour_effectif"] . '",
        "' . $array_reservation["commentaire"] . '",
        "' . $array_reservation["nom_utilisateur"] . '",
        ' . $array_reservation["id_article"] . ')' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Sous Catégorie Article
      public function insertSousCategorieFromArray($array_sous_categorie_article)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO sous_categorie_article (nom, description, id_categorie) VALUES (
        "' . $array_sous_categorie_article["nom"] . '",
        "' . $array_sous_categorie_article["description"] . '",
        ' . $array_sous_categorie_article["id_categorie"] . ')' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
      }

      // Utilisateur
      public function insertUtilisateurFromArray($array_utilisateur)
      {
          $this->mySqlManager->init_connection();

          // Insert data into table from array
          $sql = 'INSERT INTO utilisateur (nom_utilisateur , mot_de_passe , nom , prenom , courriel , telephone , date_naissance , id_permission) VALUES (
        "' . $array_utilisateur["nom_utilisateur"] . '",
        "' . $array_utilisateur["mot_de_passe"] . '",
        "' . $array_utilisateur["nom"] . '",
        "' . $array_utilisateur["prenom"] . '",
        "' . $array_utilisateur["courriel"] . '",
        "' . $array_utilisateur["telephone"] . '",
        "' . $array_utilisateur["date_naissance"] . '",
        ' . $array_utilisateur["id_permission"] . ')' ;
          $this->mySqlManager->get_connection()->query($sql);

          // Fetch last inserted ID
          $sql = 'SELECT LAST_INSERT_ID()';
          $result = $this->mySqlManager->get_connection()->query($sql);
          $this->mySqlManager->get_connection()->close();

          // Extract ID from result set
          $row = $result -> fetch_assoc();
          $newid = $row["LAST_INSERT_ID()"];

          return $newid;
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

          $sql = 'DELETE  FROM categorie_article WHERE id_categorie = ' . $id_categorie;
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
