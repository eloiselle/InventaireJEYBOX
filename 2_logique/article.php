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
       private $int_id_sous_categorie_fk;
       private $int_id_etat_fk;

       // Constructor
       public function __construct(
           $new_id_article,
           $new_nom,
           $new_fichier,
           $new_id_sous_categorie_fk,
           $new_id_etat_fk
       ) {
           set_id($new_id_article);
           set_nom($new_nom);
           set_fichier($new_fichier);
           set_id_sous_categorie_fk($new_id_sous_categorie_fk);
           set_id_etat_fk($new_id_etat_fk);
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

       public function set_id_sous_categorie_fk($new_id_sous_categorie_fk)
       {
           $this->int_id_sous_categorie_fk = $new_id_sous_categorie_fk;
       }

       public function set_id_etat_fk($new_id_etat_fk)
       {
           $this->int_id_etat_fk = $new_id_etat_fk;
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

       public function get_id_sous_categorie_fk()
       {
           return $this->int_id_sous_categorie_fk;
       }

       public function get_id_etat_fk()
       {
           return $this->int_id_etat_fk;
       }
   }
