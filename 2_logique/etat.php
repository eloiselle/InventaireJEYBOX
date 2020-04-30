<?php
  /**
   * Objet: État
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  class etat
  {
    // Variables
    private $int_id_etat = null;
    private $string_nom = null;
    private $string_description = null;

    // Constructor
    public function __construct($id, $nom, $description)
    {
      $this->set_id($id);
      $this->set_nom($nom);
      $this->set_description($description);
    }

    // Setters
    public function set_id($new_id) {
      $this->int_id_etat = $new_id;
    }

    public function set_nom($new_nom) {
      $this->string_nom = $new_nom;
    }

    public function set_description($new_description) {
      $this->string_description = $new_description;
    }

    // Getters
    public function get_id() {
      return $this->int_id_etat;
    }

    public function get_nom() {
      return $this->string_nom;
    }

    public function get_description() {
      return $this->string_description;
    }
  }
 ?>
