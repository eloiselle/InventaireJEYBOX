<?php
  /**
   * Objet: Permissions
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  public class permission
  {
    // Variables
    private var $int_id_permission;
    private var $string_nom;

    // Constructor
    public function __construct($new_id, $new_nom)
    {
      set_id($new_id);
      set_nom($new_nom);
    }

    // Setters
    public function set_id($new_id) {
      $this->$int_id_permission = $new_id;
    }

    public function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

    // Getters
    public function get_id() {
      return $this->$int_id_permission;
    }

    public function get_nom() {
      return $this->$string_nom;
    }
  }
 ?>
