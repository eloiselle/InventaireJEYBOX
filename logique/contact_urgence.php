
<?php
  /**
   * Objet: Contact Urgence
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  public class contact_urgence
  {
    // Variables
    private var $int_id_contact_urgence;
    private var $string_prenom;
    private var $string_nom;
    private var $string_relation;
    private var $string_telephone;
    private var $string_nom_utilisateur_fk;

    // Constructor
    public function __construct($new_nom_utilisateur, $new_mot_de_passe, $new_prenom,
        $new_nom, $new_courriel, $new_telephone, $new_naissance, $new_id_permission)
    {
      set_id_contact_urgence($new_id_contact_urgence);
      set_prenom($new_prenom);
      set_nom($new_nom);
      set_relation($new_relation);
      set_telephone($new_telephone);
      set_nom_utilisateur($new_nom_utilisateur);
    }

    // Setters
    public function set_id_contact_urgence($new_id_contact_urgence) {
      $this->$int_id_contact_urgence = $new_id_contact_urgence;
    }

    public function set_prenom($new_prenom) {
      $this->$string_prenom = $new_prenom;
    }

    public function set_nom($new_nom) {
      $this->$string_nom = $new_nom;
    }

    public function set_relation($new_relation) {
      $this->$string_relation = $new_relation;
    }

    public function set_telephone($new_telephone) {
      $this->$string_telephone = $new_telephone;
    }

    public function set_nom_utilisateur($new_nom_utilisateur) {
      $this->$string_nom_utilisateur_fk = $new_nom_utilisateur;
    }

    // Getters
    public function get_id_contact_urgence() {
      return $this->$int_id_contact_urgence;
    }

    public function get_prenom() {
      return $this->$string_prenom;
    }

    public function get_nom() {
      return $this->$string_nom;
    }

    public function get_relation() {
      return $this->$string_courriel;
    }

    public function get_telephone() {
      return $this->$string_telephone;
    }

    public function get_nom_utilisateur() {
      return $this->$string_nom_utilisateur_fk;
    }
  }
 ?>
