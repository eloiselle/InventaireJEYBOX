<?php

// Moteur requêtes
include_once "../../3_acces_bd/moteur_requetes_bd.php";

// Gestionnaires
include_once "../../2_logique/gestionnaires/gestionnaire_article.php";
include_once "../../2_logique/gestionnaires/gestionnaire_categorie.php";
include_once "../../2_logique/gestionnaires/gestionnaire_login.php";
include_once "../../2_logique/gestionnaires/gestionnaire_reservation.php";
include_once "../../2_logique/gestionnaires/gestionnaire_utilisateur.php";

// Objets
include_once "../../2_logique/objets/article.php";
include_once "../../2_logique/objets/categorie_article.php";
include_once "../../2_logique/objets/contact_urgence.php";
include_once "../../2_logique/objets/etat.php";
include_once "../../2_logique/objets/permission.php";
include_once "../../2_logique/objets/reference.php";
include_once "../../2_logique/objets/reservation.php";
include_once "../../2_logique/objets/sous_categorie_article.php";
include_once "../../2_logique/objets/utilisateur.php";

$moteurRequetes = new moteurRequetesBD();

include 'CTRL_article.php';

 ?>
