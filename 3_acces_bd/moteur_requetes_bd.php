<?php

  include 'gestionnaire_connexion_bd.php';

  class moteurRequetesBD {
    // Variables
    private $mySqlManager = null;

    // Constructor
    public function __construct(){
      $this->mySqlManager = new sqlManager();
    }

    // ==============================================
    //                    SELECTORS
    // ==============================================

    // Article
    public function selectArticleFromID($id_article){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM article WHERE id_article = ' . $id_article;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Categorie
    public function selectCategorieFromID($id_categorie){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM categorie_article WHERE id_categorie = ' . $id_categorie;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Contact Urgence
    public function selectContactUrgenceFromID($id_contact_urgence){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM contact_urgence WHERE id_contact_urgence = ' . $id_contact_urgence;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Etat
    public function selectEtatFromID($id_etat){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM etat WHERE id_etat = ' . $id_etat;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Permission
    public function selectPermissionFromID($id_permission){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM permission WHERE id_permission = ' . $id_permission;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Reference
    public function selectReferenceFromID($id_reference){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM reference WHERE id_reference = ' . $id_reference;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Reservation
    public function selectReservationFromID($id_reservation){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM reservation WHERE id_reservation = ' . $id_reservation;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Sous Catégorie Article
    public function selectSousCategorieArticleFromID($id_sous_categorie){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM sous_categorie_article WHERE id_sous_categorie = ' . $id_sous_categorie;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Utilisateur
    public function selectUtilisateurFromID($nom_utilisateur){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM utilisateur WHERE nom_utilisateur = ' . $nom_utilisateur;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // ==============================================
    //                    CREATORS
    // ==============================================

    // Article
    public function createArticleFromArray($array_article){
      $this->mySqlManager->init_connection();

      $sql = 'INSERT INTO article (id_article, nom, fiche_url, id_sous_categorie, id_etat) VALUES ()' ;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Categorie
    public function createCategorieFromArray($array_categorie){
      $this->mySqlManager->init_connection();

      $sql = 'INSERT INTO categorie_article (nom, description) VALUES ( "' . $array_categorie["nom"] . '", "' . $array_categorie["description"] . '")';
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Contact Urgence
    public function createContactUrgenceFromArray($array_contact_urgence){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM contact_urgence WHERE id_contact_urgence = ' . $id_contact_urgence;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Etat
    public function createEtatFromArray($array_etat){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM etat WHERE id_etat = ' . $id_etat;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Permission
    public function createPermissionFromArray($array_permission){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM permission WHERE id_permission = ' . $id_permission;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Reference
    public function createReferenceFromArray($array_reference){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM reference WHERE id_reference = ' . $id_reference;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Reservation
    public function createReservationFromArray($array_reservation){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM reservation WHERE id_reservation = ' . $id_reservation;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Sous Catégorie Article
    public function createSousCategorieArticleFromArray($array_sous_categorie_article){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM sous_categorie_article WHERE id_sous_categorie = ' . $id_sous_categorie;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

    // Utilisateur
    public function createUtilisateurFromArray($array_utilisateur){
      $this->mySqlManager->init_connection();

      $sql = 'SELECT * FROM utilisateur WHERE nom_utilisateur = ' . $nom_utilisateur;
      $result = $this->mySqlManager->get_connection()->query($sql);

      $this->mySqlManager->get_connection()->close();
      return $result;
    }

  }

?>
