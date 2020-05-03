<?php
  /**
   * Objet: Contact Urgence
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  class contact_urgence
  {
      // Variables
      private $int_id_contact_urgence;
      private $string_prenom;
      private $string_nom;
      private $string_relation;
      private $string_telephone;
      private $string_nom_utilisateur_fk;

      // Constructor
      public function __construct(
          $new_id_contact_urgence,
          $new_prenom,
          $new_nom,
          $new_relation,
          $new_telephone,
          $new_nom_utilisateur
      )
      {
          $this->set_id($new_id_contact_urgence);
          $this->set_prenom($new_prenom);
          $this->set_nom($new_nom);
          $this->set_relation($new_relation);
          $this->set_telephone($new_telephone);
          $this->set_nom_utilisateur($new_nom_utilisateur);
      }

      // Setters
      public function set_id($new_id_contact_urgence)
      {
          $this->int_id_contact_urgence = $new_id_contact_urgence;
      }

      public function set_prenom($new_prenom)
      {
          $this->string_prenom = $new_prenom;
      }

      public function set_nom($new_nom)
      {
          $this->string_nom = $new_nom;
      }

      public function set_relation($new_relation)
      {
          $this->string_relation = $new_relation;
      }

      public function set_telephone($new_telephone)
      {
          $this->string_telephone = $new_telephone;
      }

      public function set_nom_utilisateur($new_nom_utilisateur)
      {
          $this->string_nom_utilisateur_fk = $new_nom_utilisateur;
      }

      // Getters
      public function get_id()
      {
          return $this->int_id_contact_urgence;
      }

      public function get_prenom()
      {
          return $this->string_prenom;
      }

      public function get_nom()
      {
          return $this->string_nom;
      }

      public function get_relation()
      {
          return $this->string_courriel;
      }

      public function get_telephone()
      {
          return $this->string_telephone;
      }

      public function get_nom_utilisateur()
      {
          return $this->string_nom_utilisateur_fk;
      }
  }
