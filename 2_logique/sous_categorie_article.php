<?php
  /**
   * Objet: Sous Categorie Article
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  public class sous_categorie_article
  {
    // Variables
    private var $int_id_sous_categorie;
    private var $string_nom;
    private var $string_description;
    private var $int_id_categorie_fk;

    // Constructor
    public function __construct($new_id, $new_nom, $new_description, $new_id_categorie)
    {
      set_id($new_id);
      set_nom($new_nom);
      set_description($new_description);
      set_id_categorie($new_id_categorie)
    }

    // Setters
    public function set_id($new_id) {
      $this->$int_id_sous_categorie = $new_id;
    }

    public function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

    public function set_description($new_description) {
      $this->$string_description = $new_description;
    }

    public function set_id_categorie($new_id_categorie) {
      $this->$int_id_categorie_fk = $new_id_categorie;
    }

    // Getters
    public function get_id() {
      return $this->$int_id_sous_categorie;
    }

    public function get_nom() {
      return $this->$string_nom;
    }

    public function get_description() {
      return $this->$string_description;
    }

    public function get_id_categorie() {
      return $this->$int_id_categorie_fk;
    }
  }
 ?>
