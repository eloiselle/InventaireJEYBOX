<?php
  /**
   * Objet: Reference
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  class reference
  {
      // Variables
      private $int_id_reference;
      private $string_nom;
      private $string_url;
      private $string_description;
      private $int_id_article_fk;

      // Constructor
      public function __construct(
          $new_id_reference,
          $new_nom,
          $new_url,
          $new_description,
          $new_id_article_fk
      )
      {
          $this->set_id($new_id_reference);
          $this->set_nom($new_nom);
          $this->set_url($new_url);
          $this->set_description($new_description);
          $this->set_id_article_fk($new_id_article_fk);
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

      public function set_id_article_fk($new_id_article_fk)
      {
          $this->int_id_article_fk = $new_id_article_fk;
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

      public function get_id_article_fk()
      {
          return $this->int_id_article_fk;
      }
  }
