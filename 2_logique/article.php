<?php
  /**
   * Objet: Article
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
   class article
  {
    // Variables
     var $int_id_article;
     var $string_nom;
     var $file_fichier;
     var $int_id_sous_categorie_fk;
     var $int_id_etat_fk;

    // Constructor
     function __construct($new_id_article, $new_nom,
        $new_fichier, $new_id_sous_categorie_fk, $new_id_etat_fk)
    {
      set_id($new_id_article);
      set_nom($new_nom);
      set_fichier($new_fichier);
      set_id_sous_categorie_fk($new_id_sous_categorie_fk);
      set_id_etat_fk($new_id_etat_fk);
    }

    // Setters
     function set_id($new_id_article) {
      $this->$int_id_article = $new_id_article;
    }

     function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

     function set_fichier($new_fichier) {
      $this->$file_fichier = $new_fichier;
    }

     function set_id_sous_categorie_fk($new_id_sous_categorie_fk) {
      $this->$int_id_sous_categorie_fk = $new_id_sous_categorie_fk;
    }

     function set_id_etat_fk($new_id_etat_fk) {
      $this->$int_id_etat_fk = $new_id_etat_fk;
    }

    // Getters
     function get_id() {
      return $this->$int_id_article;
    }

     function get_nom() {
      return $this->$string_nom;
    }

     function get_fichier() {
      return $this->$file_fichier;
    }

     function get_id_sous_categorie_fk() {
      return $this->$int_id_sous_categorie_fk;
    }

     function get_id_etat_fk() {
      return $this->$int_id_etat_fk;
    }
  }
 ?>
