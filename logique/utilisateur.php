<?php
  /**
   * Objet: Utilisateur
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  public class utilisateur
  {
    // Variables
    private var $string_nom_utilisateur;
    private var $string_mot_de_passe;
    private var $string_prenom;
    private var $string_nom;
    private var $string_courriel;
    private var $string_telephone;
    private var $date_naissance;
    private var $int_id_permission_fk;

    // Constructor
    public function __construct($new_nom_utilisateur, $new_mot_de_passe, $new_prenom,
        $new_nom, $new_courriel, $new_telephone, $new_naissance, $new_id_permission)
    {
      set_nom_utilisateur($new_nom_utilisateur);
      set_mot_de_passe($new_mot_de_passe);
      set_prenom($new_prenom);
      set_nom($new_nom);
      set_courriel($new_courriel);
      set_telephone($new_telephone);
      set_naissance($new_naissance);
      set_id_permission($new_id_permission);
    }

    // Setters
    public function set_nom_utilisateur($new_nom_utilisateur) {
      $this->$string_nom_utilisateur = $new_nom_utilisateur;
    }

    public function set_mot_de_passe($new_mot_de_passe) {
      $this->$string_mot_de_passe = $new_mot_de_passe;
    }

    public function set_prenom($new_prenom) {
      $this->$string_prenom = $new_prenom;
    }

    public function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

    public function set_courriel($new_courriel) {
      $this->$string_courriel = $new_courriel;
    }

    public function set_telephone($new_telephone) {
      $this->$string_telephone = $new_telephone;
    }

    public function set_naissance($new_naissance) {
      $this->$date_naissance = $new_naissance;
    }

    public function set_id_permission($new_id_permission) {
      $this->$int_id_permission_fk = $new_id_permission;
    }

    // Getters
    public function get_nom_utilisateur() {
      return $this->$string_nom_utilisateur;
    }

    public function get_mot_de_passe() {
      return $this->$string_mot_de_passe;
    }

    public function get_prenom() {
      return $this->$string_prenom;
    }

    public function get_nom() {
      return $this->$string_nom;
    }

    public function get_courriel() {
      return $this->$string_courriel;
    }

    public function get_telephone() {
      return $this->$string_telephone;
    }

    public function get_naissance() {
      return $this->$date_naissance;
    }

    public function get_id_permission() {
      return $this->$int_id_permission_fk;
    }
  }
 ?>
