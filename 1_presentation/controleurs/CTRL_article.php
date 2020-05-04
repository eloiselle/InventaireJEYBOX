<?php

// Moteur requêtes
include_once "../../3_acces_bd/moteur_requetes_bd.php";

// Gestionnaires
include_once "../../2_logique/gestionnaires/gestionnaire_article.php";

// Objets
include_once "../../2_logique/objets/article.php";
include_once "../../2_logique/objets/reference.php";
include_once "../../2_logique/objets/etat.php";

$moteurRequetes = new moteurRequetesBD();
$listeArticles = gestionnaireArticle::fetchAllArticleFromBD($moteurRequetes);

// Charge la page
include '../client/consulter_article.php';
