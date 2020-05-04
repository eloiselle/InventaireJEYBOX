<?php /****************************************
Fichier:        categorie_article.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Cat-01 - Gestion des catégories d'articles - Objet categorie_article
Date:           30 avril 2020
***********************************************/
  class categorie_article
  {
      // Variables
      private $int_id_categorie_article;
      private $string_nom;
      private $string_description;

      // Override __construct
      public function __construct(
          $new_id_categorie_article,
          $new_nom,
          $new_description
      )
      {
          $this->set_id($new_id_categorie_article);
          $this->set_nom($new_nom);
          $this->set_description($new_description);
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
      public function set_id($new_id_categorie_article)
      {
          $this->int_id_categorie_article = $new_id_categorie_article;
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
          return $this->int_id_categorie_article;
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
