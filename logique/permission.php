<?php
  /**
   * Objet: Permissions
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  class permission
  {
    // Variables
    var $int_id_permission;
    var $string_nom;

    // Constructor
    function __construct($new_id, $new_nom)
    {
      set_id($new_id);
      set_nom($new_nom);
    }

    // Setters
    function set_id($new_id) {
      $this->$int_id_permission = $new_id;
    }

    function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

    // Getters
    function get_id() {
      return $this->$int_id_permission;
    }

    function get_nom() {
      return $this->$string_nom;
    }
  }
 ?>
