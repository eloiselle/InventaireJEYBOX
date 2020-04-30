<?php
  /**
   * Objet: État
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  public class etat
  {
    // Variables
    private var $int_id_etat;
    private var $string_nom;
    private var $string_description;

    // Constructor
    public function __construct($new_id, $new_nom, $new_description)
    {
      set_id($new_id);
      set_nom($new_nom);
      set_description($new_description);
    }

    // Setters
    public function set_id($new_id) {
      $this->$int_id_etat = $new_id;
    }

    public function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

    public function set_description($new_description) {
      $this->$string_description = $new_description;
    }

    // Getters
    public function get_id() {
      return $this->$int_id_etat;
    }

    public function get_nom() {
      return $this->$string_nom;
    }

    public function get_description() {
      return $this->$string_description;
    }
  }
 ?>
