<?php
  /**
   * Objet: Permissions
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  class utilisateur
  {
    // Variables
    var $string_nom_utilisateur;
    var $string_mot_de_passe;
    var $string_prenom;
    var $string_nom;
    var $string_courriel;
    var $string_telephone;
    var $date_naissance;
    var $int_id_permission;

    // Constructor
    function __construct($new_id, $new_nom)
    {
      set_id($new_id);
      set_nom($new_nom);
    }

    // Setters
    function set_nom_utilisateur($new_nom_utilisateur) {
      $this->$string_nom_utilisateur = $new_nom_utilisateur;
    }

    function set_mot_de_passe($new_mot_de_passe) {
      $this->$string_mot_de_passe = $new_mot_de_passe;
    }

    function set_prenom($new_prenom) {
      $this->$string_prenom = $new_prenom;
    }

    function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

    function set_courriel($new_courriel) {
      $this->$string_courriel = $new_courriel;
    }

    function set_telephone($new_telephone) {
      $this->$string_telephone = $new_telephone;
    }

    function set_telephone($new_naissance) {
      $this->$date_naissance = $new_naissance;
    }

    function set_id_permission($new_id_permission) {
      $this->$int_id_permission = $new_id_permission;
    }

    // Getters
    function get_nom_utilisateur() {
      return $this->$string_nom_utilisateur;
    }

    function get_mot_de_passe() {
      return $this->$string_mot_de_passe;
    }

    function get_prenom() {
      return $this->$string_prenom;
    }

    function get_nom() {
      return $this->$string_nom;
    }

    function get_courriel() {
      return $this->$string_courriel;
    }

    function get_telephone() {
      return $this->$string_telephone;
    }

    function get_naissance() {
      return $this->$date_naissance;
    }

    function get_id_permission() {
      return $this->$int_id_permission;
    }
  }
 ?>
