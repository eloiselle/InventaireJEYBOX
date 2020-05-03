<?php
  /**
   * Objet: Article
   * Auteur: Émile, Jérôme et Yannick
   * Date: 29 avril 2020
   */
   class article
   {
       // Variables
       private $int_id_article;
       private $string_nom;
       private $file_fichier;
       private $int_id_sous_categorie;
       private $int_id_etat;

       // Override __construct
       public function __construct(
           $new_id_article,
           $new_nom,
           $new_fichier,
           $new_id_sous_categorie,
           $new_id_etat
       ) {
           $this->set_id($new_id_article);
           $this->set_nom($new_nom);
           $this->set_fichier($new_fichier);
           $this->set_id_sous_categorie($new_id_sous_categorie);
           $this->set_id_etat($new_id_etat);
       }

       // Override __toString
       public function __toString()
       {
           $string_return = '';

           $string_return .= "ID: " . $this->get_id();
           $string_return .= " nom: " . $this->get_nom();
           $string_return .= " fichier: " . $this->get_fichier();
           $string_return .= " id_sous_categorie: " . $this->get_id_sous_categorie();
           $string_return .= " id_etat: " . $this->get_id_etat();

           return $string_return;
       }

       // Setters
       public function set_id($new_id_article)
       {
           $this->int_id_article = $new_id_article;
       }

       public function set_nom($new_nom)
       {
           $this->string_nom = $new_nom;
       }

       public function set_fichier($new_fichier)
       {
           $this->file_fichier = $new_fichier;
       }

       public function set_id_sous_categorie($new_id_sous_categorie)
       {
           $this->int_id_sous_categorie = $new_id_sous_categorie;
       }

       public function set_id_etat($new_id_etat)
       {
           $this->int_id_etat = $new_id_etat;
       }

       // Getters
       public function get_id()
       {
           return $this->int_id_article;
       }

       public function get_nom()
       {
           return $this->string_nom;
       }

       public function get_fichier()
       {
           return $this->file_fichier;
       }

       public function get_id_sous_categorie()
       {
           return $this->int_id_sous_categorie;
       }

       public function get_id_etat()
       {
           return $this->int_id_etat;
       }
   }
