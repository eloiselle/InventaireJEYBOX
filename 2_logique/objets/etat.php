<?php /****************************************
Fichier:        etat.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Item-01 - Gestion des articles - Objet etat
Date:           30 avril 2020
***********************************************/
  class etat
  {
      // Variables
      private $int_id_etat;
      private $string_nom;
      private $string_description;

      // Override __construct
      public function __construct($id, $nom, $description)
      {
          $this->set_id($id);
          $this->set_nom($nom);
          $this->set_description($description);
      }

      // Override __toString
      public function __toString()
      {
          $string_return = '';

          $string_return .= "ID: " . $this->get_id();
          $string_return .= " nom: " . $this->get_nom();
          $string_return .= " description: " . $this->get_description();

          return $string_return;
      }

      // Setters
      public function set_id($new_id)
      {
          $this->int_id_etat = $new_id;
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
          return $this->int_id_etat;
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
