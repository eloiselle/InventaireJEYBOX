<?php
  /**
   * Objet: Categorie
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  class categorie
  {
      // Variables
      private $int_id_categorie;
      private $string_nom;
      private $string_description;

      // Constructor
      public function __construct(
          $new_id_categorie,
          $new_nom,
          $new_description
      )
      {
          $this->set_id($new_id_categorie);
          $this->set_nom($new_nom);
          $this->set_description($new_description);
      }

      // Setters
      public function set_id($new_id_categorie)
      {
          $this->int_id_categorie = $new_id_categorie;
      }

      public function set_nom($new_nom)
      {
          $this->string_nom = $new_nom;
      }

      public function set_description($new_description)
      {
          $this->string_description = $new_description;
      }

      // Getters
      public function get_id()
      {
          return $this->int_id_categorie;
      }

      public function get_nom()
      {
          return $this->string_nom;
      }

      public function get_description()
      {
          return $this->string_description;
      }
  }
