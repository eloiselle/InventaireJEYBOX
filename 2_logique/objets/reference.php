<?php /****************************************
Fichier:        reference.php
Auteur:         Émile et Yannick
Fonctionnalité: FW-Item-01 - Gestion des articles - Objet reference
Date:           30 avril 2020
***********************************************/
  class reference
  {
      // Variables
      private $int_id_reference;
      private $string_nom;
      private $string_url;
      private $string_description;
      private $int_id_article;

      // Override __construct
      public function __construct(
          $new_id_reference,
          $new_nom,
          $new_url,
          $new_description,
          $new_id_article
      )
      {
          $this->set_id($new_id_reference);
          $this->set_nom($new_nom);
          $this->set_url($new_url);
          $this->set_description($new_description);
          $this->set_id_article($new_id_article);
      }

      // Override __toString
      public function __toString()
      {
          $string_return = '';

          $string_return .= "ID: " . $this->get_id();
          $string_return .= " nom: " . $this->get_nom();
          $string_return .= " url: " . $this->get_url();
          $string_return .= " description: " . $this->get_description();
          $string_return .= " id_article: " . $this->get_id_article();

          return $string_return;
      }

      // Setters
      public function set_id($new_id_reference)
      {
          $this->int_id_reference = $new_id_reference;
      }

      public function set_nom($new_nom)
      {
          $this->string_nom = $new_nom;
      }

      public function set_url($new_url)
      {
          $this->string_url = $new_url;
      }

      public function set_description($new_description)
      {
          $this->string_description = $new_description;
      }

      public function set_id_article($new_id_article)
      {
          $this->int_id_article = $new_id_article;
      }

      // Getters
      public function get_id()
      {
          return $this->int_id_reference;
      }

      public function get_nom()
      {
          return $this->string_nom;
      }

      public function get_url()
      {
          return $this->string_url;
      }

      public function get_description()
      {
          return $this->string_description;
      }

      public function get_id_article()
      {
          return $this->int_id_article;
      }
  }
