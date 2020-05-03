<?php
  /**
   * Objet: Reservation
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
  class reservation
  {
      // Variables
      private $int_id_reservation;
      private $date_date_prevue;
      private $date_date_prise_possession;
      private $date_date_retour_prevue;
      private $date_date_retour_effectif;
      private $string_commentaire;
      private $string_nom_utilisateur;
      private $int_id_article;

      // Override __construct
      public function __construct(
          $new_id_reservation,
          $new_date_prevue,
          $new_date_prise_possession,
          $new_date_retour_prevue,
          $new_date_retour_effectif,
          $new_commentaire,
          $new_nom_utilisateur,
          $new_id_article
      ) {
          $this->set_id($new_id_reservation);
          $this->set_date_prevue($new_date_prevue);
          $this->set_date_prise_possession($new_date_prise_possession);
          $this->set_date_retour_prevue($new_date_retour_prevue);
          $this->set_date_retour_effectif($new_date_retour_effectif);
          $this->set_commentaire($new_commentaire);
          $this->set_nom_utilisateur($new_nom_utilisateur);
          $this->set_id_article($new_id_article);
      }

      // Override __toString
      public function __toString()
      {
          $string_return = '';

          $string_return .= "ID: " . $this->get_id();
          $string_return .= " date_prevue: " . $this->get_date_prevue();
          $string_return .= " date_prise_possession: " . $this->get_date_prise_possession();
          $string_return .= " date_retour_prevue: " . $this->get_date_retour_prevue();
          $string_return .= " date_retour_effectif: " . $this->get_date_retour_effectif();
          $string_return .= " commentaire: " . $this->get_commentaire();
          $string_return .= " nom_utilisateur: " . $this->get_nom_utilisateur();
          $string_return .= " id_article: " . $this->get_id_article();

          return $string_return;
      }

      // Setters
      public function set_id($new_id_reservation)
      {
          $this->int_id_reservation = $new_id_reservation;
      }

      public function set_date_prevue($new_date_prevue)
      {
          $this->date_date_prevue = $new_date_prevue;
      }

      public function set_date_prise_possession($new_date_prise_possession)
      {
          $this->date_date_prise_possession = $new_date_prise_possession;
      }

      public function set_date_retour_prevue($new_date_retour_prevue)
      {
          $this->date_date_retour_prevue = $new_date_retour_prevue;
      }

      public function set_date_retour_effectif($new_date_retour_effectif)
      {
          $this->date_date_retour_effectif = $new_date_retour_effectif;
      }

      public function set_commentaire($new_commentaire)
      {
          $this->string_commentaire = $new_commentaire;
      }

      public function set_nom_utilisateur($new_nom_utilisateur)
      {
          $this->string_nom_utilisateur = $new_nom_utilisateur;
      }

      public function set_id_article($new_id_article)
      {
          $this->int_id_article = $new_id_article;
      }

      // Getters
      public function get_id()
      {
          return $this->int_id_reservation;
      }

      public function get_date_prevue()
      {
          return $this->date_date_prevue;
      }

      public function get_date_prise_possession()
      {
          return $this->date_date_prise_possession;
      }

      public function get_date_retour_prevue()
      {
          return $this->date_date_retour_prevue;
      }

      public function get_date_retour_effectif()
      {
          return $this->date_date_retour_effectif;
      }

      public function get_commentaire()
      {
          return $this->string_commentaire;
      }

      public function get_nom_utilisateur()
      {
          return $this->string_nom_utilisateur;
      }

      public function get_id_article()
      {
          return $this->int_id_article;
      }
  }
