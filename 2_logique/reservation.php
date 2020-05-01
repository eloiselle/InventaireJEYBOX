<?php
  /**
   * Objet: Reservation
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  public class reservation
  {
    // Variables
    private $int_id_reservation;
    private $date_date_prevue;
    private $date_date_prise_possession;
    private $date_date_retour_prevue;
    private $date_date_retour_effectif;
    private $string_commentaire;
    private $int_id_nom_utilisateur_fk;
    private $int_id_article_fk;

    // Constructor
    public function __construct($new_id_reservation, $new_date_prevue,
        $new_date_prise_possession, $new_date_retour_prevue, $new_date_retour_effectif,
        $new_commentaire, $new_id_nom_utilisateur_fk, $new_id_article_fk)
    {
      $this->set_id($new_id_reservation);
      $this->set_date_prevue($new_date_prevue);
      $this->set_date_prise_possession($new_date_prise_possession);
      $this->set_date_retour_prevue($new_date_retour_prevue);
      $this->set_date_retour_effectif($new_date_retour_effectif);
      $this->set_commentaire($new_commentaire);
      $this->set_id_nom_utilisateur_fk($new_id_nom_utilisateur_fk);
      $this->set_id_article_fk($new_id_article_fk);
    }

    // Setters
    public function set_id($new_id_reservation) {
      $this->int_id_reservation = $new_id_reservation;
    }

    public function set_date_prevue($new_date_prevue) {
      $this->date_date_prevue = $new_date_prevue;
    }

    public function set_date_prise_possession($new_date_prise_possession) {
      $this->date_date_prise_possession = $new_date_prise_possession;
    }

    public function set_date_retour_prevue($new_date_retour_prevue) {
      $this->date_date_retour_prevue = $new_date_retour_prevue;
    }

    public function set_date_retour_effectif($new_date_retour_effectif) {
      $this->date_date_retour_effectif = $new_date_retour_effectif;
    }

    public function set_commentaire($new_commentaire) {
      $this->string_commentaire = $new_commentaire;
    }

    public function set_id_nom_utilisateur_fk($new_id_nom_utilisateur_fk) {
      $this->int_id_nom_utilisateur_fk = $new_id_nom_utilisateur_fk;
    }

    public function set_id_article_fk($new_id_article_fk) {
      $this->int_id_article_fk = $new_id_article_fk;
    }

    // Getters
    public function get_id() {
      return $this->int_id_reservation;
    }

    public function get_date_prevue() {
      return $this->date_date_prevue;
    }

    public function get_date_prise_possession() {
      return $this->date_date_prise_possession;
    }

    public function get_date_retour_prevue() {
      return $this->date_date_retour_prevue;
    }

    public function get_date_retour_effectif() {
      return $this->date_date_retour_effectif;
    }

    public function get_commentaire() {
      return $this->string_commentaire;
    }

    public function get_id_nom_utilisateur_fk() {
      return $this->int_id_nom_utilisateur_fk;
    }

    public function get_id_article_fk() {
      return $this->int_id_article_fk;
    }
  }
 ?>